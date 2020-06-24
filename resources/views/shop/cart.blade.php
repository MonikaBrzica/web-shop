@extends('layouts.app')

@section('content')
   <div class="cart-items">
       @foreach($products as $product)
           <div class="cart-item">
               <div class="cart-image">
                   <img src="{{$product->main_image}}">
               </div>
               <div class="cart-name">{{$product->name}}</div>
               <div class="cart-price">{{$product->price}} €</div>
               <div class="cart-delete">
                    <form method="post" action="{{route('cart-delete', ["cartId" => $product->cart_id])}}">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Pobriši">
                    </form>
               </div>
           </div>
       @endforeach
   </div>
@endsection