<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockItems extends Model
{
    protected $fillable = [
        'product_name','product_code','product_type','product_brand'.'category','status','quantity','minimum_quantity'
    ];
}
