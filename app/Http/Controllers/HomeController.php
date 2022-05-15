<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::query()
            ->limit(10)
            ->get();
        foreach ($products as $product)
        {
            $product->retail_price = number_format($product->retail_price,0,'',' ');
            $product->crossed_out_price = number_format($product->crossed_out_price,0,'',' ');
        }
        return view('home', [
            'products' => $products
        ]);
    }
}
