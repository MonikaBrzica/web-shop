<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('home-page');

Route::get('/shop/{categoryId?}', 'ShopController@index')->name('shop');

Route::get('/single-product/{productId}', 'ShopController@single')->name('single-product');

Route::post('/cart-add/{productId}', 'ShopController@addToCart')->name('add-to-cart');

Route::get('/cart', 'ShopController@getCart')->name('cart');

Route::post('/cart-delete/{cartId}', 'ShopController@deleteCart')->name('cart-delete');

Auth::routes();

/*
 *          ADMIN
 */

Route::prefix('admin')->middleware('checkIsAdmin')->group(function () {

    Route::get('/', 'AdminController@index')->name('admin-index');

    Route::get('/categories', 'AdminController@categories')->name('categories');

    Route::post('/categories', 'AdminController@addCategory')->name('add-category');

    Route::post('/categories/delete/{categoryId}', 'AdminController@deleteCategory')->name('delete-category');

    Route::get('/articles', 'AdminController@articles')->name('articles');

    Route::post('/articles', 'AdminController@createArticle')->name('create-article');

    Route::post('/articles/delete/{productId}', 'AdminController@deleteProduct')->name('delete-product');

    Route::get('/articles/single/{productId}', 'AdminController@singleProduct')->name('product-single');

    Route::post('/articles/update/{productId}', 'AdminController@updateProduct')->name('update-product');

});

//Route::get('/home', 'HomeController@index')->name('home');
