<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockItems extends Model
{
    protected $fillable = [
        'product_name','product_code','category','status','quantity','minimum_quantity'
    ];
}
