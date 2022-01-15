<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart;

use Illuminate\Support\Facades\Mail; 

use App\Mail\Thanks;

class ShopController extends Controller
{
     public function index() //追加
   {
        
        $products = Product::Paginate(6);//Eloquantで検索
        
        return view('shop',compact('products'));
   }
   
     public function myCart(Cart $cart)
   {
        $data = $cart->showCart();
        return view('mycart',$data);
       
   }
   
     public function addMycart(Request $request,Cart $cart)
   {
      
       //カートに追加の処理
       $product_id = $request->product_id;
       $message = $cart->addCart($product_id);
       
       //追加後の情報を取得
       $data = $cart->showCart();
       
       return view('mycart',$data)->with('message' , $message);
        
   } 
   
     public function __construct()
   {
       $this->middleware('auth');
     
   }
   
  
     public function deleteCart(Request $request,Cart $cart)
   {
        //カートから削除の処理
       $product_id = $request->product_id;
       $message = $cart->deleteCart($product_id);
       
       //追加後の情報を取得
       $data = $cart->showCart();
       
       return view('mycart',$data)->with('message' , $message);
   }



       public function checkout(Request $request,Cart $cart)
   {

       $user = Auth::user();
       $mail_data['user']=$user->name; //追記
       $mail_data['checkout_items']=$cart->checkoutCart(); //編集
       Mail::to($user->email)->send(new Thanks($mail_data));//編集
       return view('checkout');
   }
   
   
}