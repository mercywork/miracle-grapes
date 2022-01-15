<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $fillable = [
     'product_id','user_id',
   ];
   
   public function showCart()
   {
       $user_id = Auth::id();
       $data['my_carts'] = $this->where('user_id',$user_id)->get();
   
       $data['count']=0;
       $data['sum']=0;
       
       foreach($data['my_carts'] as $my_cart){
           $data['count']++;
           $data['sum'] += $my_cart->product->price;
       }
       return $data;
   }
   
   public function product()
   {
       return $this->belongsTo('\App\Models\Product');
   }
   
   public function addCart($product_id)
   {
       $user_id = Auth::id(); 
       $cart_add_info = Cart::firstOrCreate(['product_id' => $product_id,'user_id' => $user_id]);

       if($cart_add_info->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }
       else{
           $message = 'カートに登録済みです';
       }

       return $message;
   }
   
   
   public function deleteCart($product_id)
   {
       $user_id = Auth::id();
       $delete = $this->where('user_id', $user_id)->where('product_id',$product_id)->delete();
       
       if($delete > 0){
       $message = 'カートから一つの商品を削除しました。';
       }else{
           $message = '削除に失敗しました';
       }
       return $message;
   }
   
   
   public function checkoutCart()
   {
       $user_id = Auth::id(); 
       $checkout_items=$this->where('user_id', $user_id)->get();
       $this->where('user_id', $user_id)->delete();

       return $checkout_items;     
   }
}


