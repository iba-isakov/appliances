<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::query()
            ->with('category')
            ->with('remains')
            ->find($id);
        $categories = Category::getParentCategories($product->category->id);
        return view('products.product',[
            'product' =>$product,
            'categories' => $categories
        ]);
    }
}
