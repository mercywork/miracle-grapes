<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// ユーザ登録

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::group(['middleware' => ['guest']], function () {
    // 認証
    //ログインフォーム表示
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    
    //ログイン処理
    Route::post('login', 'Auth\LoginController@login')->name('login.post');
});


Route::group(['middleware' => ['auth']], function () {
//ホーム画面
Route::get('home', function () {
    return view('auth.home');
})->name('home');


//ログアウト
Route::post('/logout',  'Auth\LoginController@logout')->name('logout');


});



// お問い合わせ入力ページ
Route::get('index', 'ContactsController@index')->name('contact');

// 確認ページ
Route::post('/confirm', 'ContactsController@confirm')->name('confirm');

// DB挿入、メール送信
Route::post('/process', 'ContactsController@process')->name('process');

// 完了ページ
Route::get('/complete', 'ContactsController@complete')->name('complete');


//ショッピングカート


Route::get('/','CartController@index');

Route::get('shop','ShopController@index')->name('shop');


//Routeのグループ化

Route::group(['middleware' => ['auth']], function () {

Route::get('/mycart','ShopController@myCart');

Route::post('/mycart', 'ShopController@addMycart');

Route::post('/cartdelete','ShopController@deleteCart');

//購入完了

Route::post('/checkout', 'ShopController@checkout');

});

Auth::routes();

