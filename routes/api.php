<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('v1/getProducts',[\App\Http\Controllers\Api\MoySkladController::class,'getProducts']);
Route::post('v1/getGroups',[\App\Http\Controllers\Api\MoySkladController::class,'getGroups']);
Route::post('v1/getImagesForProducts',[\App\Http\Controllers\Api\MoySkladController::class,'getImagesForProducts']);
Route::post('v1/getProductRemains',[\App\Http\Controllers\Api\MoySkladController::class,'getProductRemains']);
