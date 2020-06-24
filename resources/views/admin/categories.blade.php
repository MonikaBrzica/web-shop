@extends('layouts.admin')

@section('admin-content')

    <div class="wrap">
        <form action="{{ route('add-category') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mat-div">
                <label for="category-name" class="mat-label">Category name</label>
                <input type="text" class="mat-input" id="category-name" name="category_name">
            </div>

            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Custom Upload
            </label>
            <input id="file-upload" type="file" name="category_image"/>

            <button type="submit" id="submit-button">Submit</button>
        </form>
    </div>

    <div id="categories" class="container">
        <div class="row">
            @foreach($shopCategories as $shopCategory)
                <div class="col-md-4 category-box">
                    <div @mouseover="showByIndex = {{$shopCategory->category_id}}" @mouseout="showByIndex = null" class="category-image" style="background: url({{ asset('images').'/'. $shopCategory->image_name }})">
                        <div class="labels" v-show="showByIndex === {{$shopCategory->category_id}}">
                            <div class="edit">
                                <i class="fa fa-edit customised-edit"></i>
                            </div>
                            <div class="delete">
                                <form method="post" action="{{route('delete-category', ["categoryId" => $shopCategory->category_id])}}">
                                    @csrf
                                    <button type="submit">
                                        <i class="fa fa-eraser customised-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="category-name"> {{ $shopCategory->category_name }} </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection