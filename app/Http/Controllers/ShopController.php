<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart;

class ShopController extends Controller
{
     public function index() //追加
   {
        
        $products = Product::Paginate(6);//Eloquantで検索
        
        return view('shop',compact('products'));
   }
   
     public function myCart()
   {
        $my_carts = Cart::all();
        return view('mycart',compact('my_carts'));
       
   }
   
     public function addMycart(Request $request)
   {
       $user_id = Auth::id();
       $product_id = $request->product_id;
       
       $cart_add_info = Cart::firstOrCreate(['product_id' => $product_id,'user_id' => $user_id]);
       
        if($cart_add_info->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }
       else{
           $message = 'カートに登録済みです';
       }

       $my_carts = Cart::where('user_id',$user_id)->get();

       return view('mycart',compact('my_carts' , 'message'));
        
   } 
}
