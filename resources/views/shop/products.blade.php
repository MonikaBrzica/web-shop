<div class="row">
    @foreach($products as $product)
            <div class="col-md-3 product">
                <a href="{{route('single-product', ["productId" => $product->id])}}" style="color: inherit; text-decoration: none;">
                    <div class="product-image">
                        <img src="{{$product->main_image}}">
                    </div>
                    <div class="product-name">{{ $product->name }}</div>
                    <div class="product-price">{{ $product->price }} €</div>
                </a>
            </div>
    @endforeach
</div>