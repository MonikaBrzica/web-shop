<?php

namespace BE3;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'category_id', 'description', 'price', 'main_image'
    ];
}
