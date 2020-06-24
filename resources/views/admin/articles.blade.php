@extends('layouts.admin')

@section('admin-content')
<h3>Create new product</h3>

    <form method="post" action="{{route('create-article')}}" enctype="multipart/form-data">
        @csrf
        <div class="mat-div">
            <label for="name" class="mat-label">Ime artikla</label>
            <input type="text" class="mat-input" id="name" name="name">
        </div>
        <div class="mat-div">
            <label for="description" class="mat-label">Opis proizvoda</label>
            <input type="text" class="mat-input" id="description" name="description">
        </div>
        <div class="mat-div">
            <label for="price" class="mat-label">Cijena proizvoda</label>
            <input type="number" class="mat-input" id="price" name="price">
        </div>
        <div style="color: #0000ff">
            <label for="category-id">Izaberi kategoriju</label>
            <select name="category-id">
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>

        <label for="main-image" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Slika artikla
        </label>
        <input id="main-image" type="file" name="main_image"/>

        <button type="submit" id="submit-button">Napravi</button>
    </form>

<h3>All products</h3>
<div class="product-row">
    @foreach($products as $product)
        <div class="product">
            <a href="{{route('product-single', ["productId" => $product->id])}}" style="color: inherit; text-decoration:none;">
                <div class="product-image">
                    <img src="{{ asset('images').'/'. $product->main_image}}">
                </div>
                <div class="product-name">{{ $product->name }}</div>
                <div class="product-price">{{ $product->price }} €</div>
                <div>
                    <form method="post" action="{{route('delete-product', ['productId' => $product->id])}}">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Pobriši">
                    </form>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection