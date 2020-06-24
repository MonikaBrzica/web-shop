<?php

namespace BE3\Http\Controllers;

use BE3\Cart;
use BE3\Products;
use Illuminate\Http\Request;
use BE3\ShopCategories;
use BE3\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function index($categoryId = null)
    {

        if ($categoryId == '') {
            $products = Products::all();
        }else {
            $products = Products::all()->where('category_id', $categoryId);
        }

        $shopCategories = ShopCategories::all();
        $currentCategoryId = $categoryId;

        return view('shop.index', compact('shopCategories', 'currentCategoryId', 'products'));
    }

    public function single($productId)
    {
        $product = Products::where('id', $productId)->first();

        return view('shop.single', compact('product'));
    }

    public function addToCart(Request $request, $productId)
    {
        $userId = $request["user-id"];

        $cart = new Cart;
        $cart->product_id = $productId;
        $cart->user_id = $userId;

        $cart->save();

        return back();
    }

    public function getCart()
    {
        $userId = Auth::user()->id;

        $products = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            ->select('carts.id as cart_id','products.*')
            ->where('carts.user_id', $userId)
            ->get();

        return view('shop.cart', compact('products'));
    }

    public function deleteCart($cartId)
    {
        $cart = Cart::find($cartId);

        $cart->delete();

        return back();
    }
}