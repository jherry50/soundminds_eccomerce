<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected  $fillable = [
//        'categoryId',
//        'productPath',
        'productName',
        'currentPrice',
        'previousPrice',
        'discountRate',
        'soldOut',
    ];
}
