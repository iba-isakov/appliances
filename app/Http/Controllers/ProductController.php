<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::query()->findOrFail($id);
        return view('products.products',[
            'product' =>$product
        ]);
    }
}
