<?php

namespace BE3\Http\Controllers;

use BE3\Products;
use BE3\ShopCategories;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function categories()
    {
        $shopCategories = ShopCategories::all();

        return view('admin.categories', compact('shopCategories'));
    }

    public function addCategory(Request $request)
    {
        if ($request->hasFile('category_image')) {
            $image = Input::file('category_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }

        ShopCategories::create([
            'category_name' => request('category_name'),
            'url_slug' => str_slug(request('category_name')),
            'image_name' => $name
        ]);

        return redirect()->back()->withSuccess('IT WORKS!');
    }

    public function deleteCategory($categoryId)
    {
        ShopCategories::where('category_id',$categoryId)->delete();

        return back();
    }

    public function articles()
    {

        $products = Products::all();
        $categories = ShopCategories::all();

        return view('admin.articles', compact('products', 'categories'));
    }

    public function createArticle(Request $request)
    {
        $filename = "";

        if ($request->hasFile('main-image')) {
            $image = Input::file('main-image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $filename);
        }

        Products::create([
            'name'  =>  $request["name"],
            'category_id'   =>  $request["category-id"],
            'description'   =>  $request["description"],
            'price'         =>  $request["price"],
            'main_image'    =>  $filename,
        ]);

        return back();
    }

    public function deleteProduct($productId)
    {
        $product = Products::find($productId);

        $product->delete();

        return back();
    }

    public function singleProduct($productId)
    {
        $product = Products::where('id', $productId)->first();
        $categories = ShopCategories::all();

        return view('admin.single', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $productId)
    {
        $product = Products::find($productId);

        $file = $request->file("main_image");
        $old_filename = $product->main_image;
        $filename = $old_filename;

        if ( $file != null ){
            unlink(public_path().'/images/'. $old_filename);

            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/images/', $filename);
        }

        $product->name = $request["name"];
        $product->category_id = $request["category-id"];
        $product->description = $request["description"];
        $product->price = $request["price"];
        $product->main_image = $filename;

        $product->save();

        return back();
    }
}
