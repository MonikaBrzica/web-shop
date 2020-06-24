@extends('layouts.app')

@section('content')
    <div class="product-image">
        <img src="{{$product->main_image}}">
    </div>
    <div class="product-name">{{ $product->name }}</div>
    <div class="product-description">{{ $product->description }}</div>
    <div class="product-price">{{ $product->price }} €</div>
    @if(\Illuminate\Support\Facades\Auth::check())
        <form method="post" action="{{route('add-to-cart', ["productId" => $product->id])}}">
            @csrf
            <input type="hidden" name="user-id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
            <input type="submit" class="btn btn-primary buy-button" value="Stavi u košaricu">
        </form>
    @endif
@endsection