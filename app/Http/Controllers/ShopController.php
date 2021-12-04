<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
     public function index() //追加
   {
        
        $products = Product::Paginate(6);//Eloquantで検索
        
        return view('shop',compact('products'));
   }
}
