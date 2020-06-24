<?php

namespace BE3;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'product_id'
    ];
}
