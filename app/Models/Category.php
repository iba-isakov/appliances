<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $fillable = [
      'parent',
      'name',
      'image',
    ];
    public  static function getCategories()
    {
        $categories = self::get();
        foreach ($categories as $category)
        {
            $category->sub_categories = $categories->filter(function ($cat) use($category){
               return $cat->parent == $category->id;
            });
        }
        return $categories;
    }
}
