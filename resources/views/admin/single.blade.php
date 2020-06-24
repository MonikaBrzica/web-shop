@extends('layouts.admin')

@section('admin-content')
    <form method="post" action="{{route('update-product', ["productId" => $product->id])}}" enctype="multipart/form-data">
        @csrf
        <div class="mat-div">
            <label for="name" class="mat-label">Ime artikla</label>
            <input type="text" class="mat-input" id="name" name="name" value="{{$product->name}}">
        </div>
        <div class="mat-div">
            <label for="description" class="mat-label">Opis proizvoda</label>
            <input type="text" class="mat-input" id="description" name="description" value="{{$product->description}}">
        </div>
        <div class="mat-div">
            <label for="price" class="mat-label">Cijena proizvoda</label>
            <input type="number" class="mat-input" id="price" name="price" value="{{$product->price}}">
        </div>
        <div style="color: #0000ff">
            <label for="category-id">Izaberi kategoriju</label>
            <select name="category-id">
                @foreach($categories as $category)
                    <option value="{{$category->category_id}}"
                        @if($category->category_id == $product->category_id)
                        selected
                        @endif
                    >{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="update-image">
            <img src="{{ asset('images').'/'. $product->main_image}}">
        </div>

        <label for="main-image" class="custom-file-upload">
            <i class="fa fa-cloud-upload"></i> Slika artikla
        </label>
        <input id="main-image" type="file" name="main_image"/>

        <button type="submit" id="submit-button">Napravi</button>
    </form>
@endsection