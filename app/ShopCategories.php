<?php
/**
 * Created by PhpStorm.
 * User: dario
 * Date: 12/1/18
 * Time: 10:46 PM
 */

namespace BE3;


use Illuminate\Database\Eloquent\Model;

class ShopCategories extends Model
{
    protected $table = 'shop_categories';
    public $timestamps = false;

    protected $fillable = [
        'category_name', 'url_slug', 'image_name'
    ];

}