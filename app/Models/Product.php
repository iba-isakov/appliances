<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relations\ProductRelations;
class Product extends Model
{
    use HasFactory;
    use ProductRelations;
    protected $table = "products";
    protected $fillable = [
        'name',
        'productId',
        'category_id',
        'path_name',
        'description',
        'image',
        'buy_price',
        'wholesale_price',
        'retail_price',
        'crossed_out_price',
        'country_of_manufacture',
        'brand',
        'color',
        'code',
    ];
}
