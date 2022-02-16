<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

use App\Models\Products;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/upload",[UploadController::class,'upload']);
Route::post("/pruducts",function(){
    return Products::create([
        'name' => 'Prodoct One',
        'slug' => 'product-one',
        'description' => 'this is product one',
        'price' =>'99.99'
    ]);
});
