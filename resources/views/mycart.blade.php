@extends('layouts.top')

@section('content')
<div class="container-fluid">
 <div class="">
     <div class="mx-auto" style="max-width:1200px">
         <h1 class="text-center font-weight-bold">
             {{ Auth::user()->name }}さんのカートの中身</h1>
             
             <div class="cart-body">
               <p class="text-center">{{ $message ?? ''}}</p><br>
               
               
             @if($my_carts->isNotEmpty()) 
               
                      
             <div class="mycart_layout">               
               @foreach($my_carts as $my_cart)
                   <div class="mycart_box">
                       {{$my_cart->product->name}} <br>                                
                       {{ number_format($my_cart->product->price)}}円 <br>
                           <img src="{{$my_cart->product->cover_img}}" alt="" class="incart" >
                           <br>
               
                           <form action="/cartdelete" method="post">
                               @csrf
                               <input type="hidden" name="delete" value="delete">
                               <input type="hidden" name="product_id" value="{{ $my_cart->product->id }}">
                               <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                               <input type="submit" value="カートから削除する">
                           </form>
                   </div>
               @endforeach
             </div>
             
             </div>
               
                <div class="text-center p-2">
                       個数：{{$count}}個<br>
                       <p style="font-size:1.2em; font-weight:bold;">合計金額:{{number_format($sum)}}円</p>  
                </div>  
                
                <div class="buy_btn">
                   <form action="/checkout" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >購入する</button>
                   </form>
                </div>
                
                @else
                   <p class="text-center">カートはからっぽです。</p>
               @endif
               
               <div class="shop_button">
                
               {!! link_to_route('shop', '商品一覧へ', [], ['class' => 'btn btn-lg btn-primary']) !!}
               
               </div>
             
             </div>
     </div>
 </div>
</div>
@endsection


