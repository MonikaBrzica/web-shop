@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <hr/>
        <div class="row">
            @include('shop.sidebar')
            <div class="col-md-10">
                @include('shop.products')
            </div>
        </div>
    </div>

@endsection