<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MoySkladController extends Controller
{
    public function getProducts()
    {
        $client = new Client();
        $login = 'it@tmn6';
        $password = 'qweasdzxc123';
        $options = base64_encode($login . ':' . $password);
        $headers = [
            'Authorization' => "Basic " . $options,
        ];
        $token_request = $client->request(
            'post',
            'https://online.moysklad.ru/api/remap/1.2/security/token',
            [
                'headers' => $headers,
            ]
        );
        $token = json_decode($token_request->getBody()->getContents())->access_token;
        $headers_with_token = [
            'Authorization' => "Bearer " . $token,
        ];
        $products_request = $client->request('get', 'https://online.moysklad.ru/api/remap/1.2/entity/product', [
            'headers' => $headers_with_token
        ]);
        $rows = json_decode($products_request->getBody()->getContents())->rows;
        $count = 0;
        foreach ($rows as $row) {
            $attributes = [];
            if (array_key_exists('attributes',$row)) {
                foreach ($row->attributes as $attribute) {
                    $attributes[$attribute->name] = $attribute->value;
                }
            }

//            Встраиваемая техника/Духовые шкафы/Электрические шкафы/Korting
            if($row->pathName) {
                $categories = explode('/',$row->pathName);
                $parent_id = 0;
                foreach ($categories as $category)
                {
                       $parent_category = Category::updateOrCreate(
                            [
                                'name' => $category,
                                'parent' => $parent_id
                            ],
                            [
                            ]
                        );
                       $parent_id = $parent_category->id;
                }
                Product::updateOrCreate([
                    'productId' => $row->id,

                ], [
                    'category_id' => $parent_id,
                    'buy_price' => floatval($row->buyPrice->value) ?? 0,
                    'wholesale_price' => (floatval($row->salePrices[1]->value) ?? 0)/100,
                    'retail_price' => (floatval($row->salePrices[0]->value) ?? 0)/100,
                    'country_of_manufacture' => $attributes['Страна производства'] ?? null,
                    'brand' => $attributes['Бренд'] ?? null,
                    'color' => $attributes['Цвет'] ?? null,
                    'name' => $row->name,
                    'description' => $row->description ?? null,
                    'path_name' => $row->pathName,
                    'image' => $row->images->meta->href,
                    'crossed_out_price' => (floatval($row->salePrices[0]->value) ?? 0)/100 * 0.8,
                    'code' => $row->article ?? null,
                ]);
            }
        }
    }

    public function getGroups()
    {
        $client = new Client();
        $login = 'it@tmn6';
        $password = 'qweasdzxc123';
        $options = base64_encode($login . ':' . $password);
        $headers = [
            'Authorization' => "Basic " . $options,
        ];
        $token_request = $client->request(
            'post',
            'https://online.moysklad.ru/api/remap/1.2/security/token',
            [
                'headers' => $headers,
            ]
        );
        $token = json_decode($token_request->getBody()->getContents())->access_token;
        $headers_with_token = [
            'Authorization' => "Bearer " . $token,
        ];
        $products_request = $client->request(
            'get',
            'https://online.moysklad.ru/api/remap/1.2/entity/productfolder',
            [
                'headers' => $headers_with_token
            ]
        );
        $groups = json_decode($products_request->getBody()->getContents())->rows;
    }

    public function getImagesForProducts()
    {
        $client = new Client();
        $login = 'it@tmn6';
        $password = 'qweasdzxc123';
        $options = base64_encode($login . ':' . $password);
        $headers = [
            'Authorization' => "Basic " . $options,
        ];
        $token_request = $client->request(
            'post',
            'https://online.moysklad.ru/api/remap/1.2/security/token',
            [
                'headers' => $headers,
            ]
        );
        $token = json_decode($token_request->getBody()->getContents())->access_token;
        $headers_with_token = [
            'Authorization' => "Bearer " . $token,
        ];
        $products = Product::all();
        foreach ($products as $product) {
            $products_images_request = $client->request('get', $product->image, [
                'headers' => $headers_with_token
            ]);
            $images = json_decode($products_images_request->getBody()->getContents())->rows;
            if ($images) {
                dd($images);
            }
        }
    }
}
