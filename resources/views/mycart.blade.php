@extends('layouts.top')

@section('content')
<div class="container-fluid">
 <div class="">
     <div class="mx-auto" style="max-width:1200px">
         <h1 class="text-center font-weight-bold">
             {{ Auth::user()->name }}さんのカートの中身</h1>
             
             <div class="">
               <p class="text-center">{{ $message }}</p><br>
               <div class="d-flex flex-row flex-wrap">
         
              {{-- 追加 --}}               
               @foreach($my_carts as $my_cart)
                   <div class="mycart_box_ID">
                       <p>ユーザーID：{{$my_cart->user_id}}</p>
                       <p>プロダクトID：{{$my_cart->product_id}}</p>
                   </div>
               @endforeach

               </div>
               
               <div class="shop_button">
                
               {!! link_to_route('shop', '商品一覧へ', [], ['class' => 'btn btn-lg btn-primary']) !!}
               
               </div>
             
             </div>
     </div>
 </div>
</div>
@endsection


