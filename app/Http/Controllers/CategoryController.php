<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id)
    {
        $subcategory = Category::find($id);
        $parent_id = $subcategory->parent;
        $parent_categories = [];
        while ($parent_id != 0)
        {
            $parent_category = Category::find($parent_id);
            $parent_categories[] = $parent_category;
            $parent_id = $parent_category->parent;
        }
        $category_products = Product::query()
            ->where('category_id',$subcategory->id)
            ->get();
        return view('categories.categories', [
            'subcategory' => $subcategory,
            'parent_categories' => $parent_categories,
            'category_products' => $category_products,
        ]);
    }
}
