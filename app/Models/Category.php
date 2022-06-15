<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = [
        'parent',
        'name',
        'image',
    ];

    public static function getCategories($id = null)
    {
        $categories = self::get();
        foreach ($categories as $category) {
            $category->sub_categories = $categories->filter(function ($cat) use ($category) {
                return $cat->parent == $category->id;
            });
        }
        return $categories;
    }

    public static function getCategoryProductsCount($id)
    {
        $count = 0;
        $subcategories = self::query()
            ->where('parent', $id)
            ->get();
        if ($subcategories->count() > 0) {
            foreach ($subcategories as $subcategory) {
                $count += self::getCategoryProductsCount($subcategory->id);
            }
        } else {
            $products = Product::query()
                ->where('category_id', $id)
                ->with('remains')
                ->get();
            $count = $products->count();
        }
        return $count;
    }

    public static function getSubcategories($id)
    {
        $subcategories = self::query()
            ->where('parent', $id)
            ->get();
        if ($subcategories->count() > 0) {
            foreach ($subcategories as $subcategory) {
                $subcategory->product_count = self::getCategoryProductsCount($subcategory->id);
            }
        }
        return $subcategories;
    }

    public static function getCategoryProducts($id)
    {
        $products = [];
        $subcategories = Category::query()
            ->where('parent', $id)
            ->get();
        if ($subcategories->count() > 0) {
            foreach ($subcategories as $subcategory) {
                $products = array_merge($products, self::getCategoryProducts($subcategory->id));
            }
        } else {
            $products = Product::query()
                ->where('category_id', $id)
                ->with('remains')
                ->get()->toArray();
        }
        return $products;
    }
    public static function getParentCategories($id)
    {
        $parent_id = $id;
        $parent_categories = [];
        while ($parent_id != 0) {
            $parent_category = Category::find($parent_id);
            $parent_categories[] = $parent_category;
            $parent_id = $parent_category->parent;
        }
        return $parent_categories;
    }
}
