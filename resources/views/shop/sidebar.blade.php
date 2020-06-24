<div class="col-md-2">
    <div id="shop-sidebar">
        @foreach($shopCategories as $shopCategory)
            <a href="{{  route('shop').'/'.$shopCategory->category_id }}" class="shop-url">
                <div class="category-name {{$currentCategoryId == $shopCategory->category_id ? 'active' : ''}}">
                        {{ $shopCategory->category_name }}
                </div>
            </a>
        @endforeach
    </div>
</div>
