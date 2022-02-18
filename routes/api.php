<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post("/upload",[UploadController::class,'upload']);

Route::get("/pruducts",[ProductController::class,'index']);

Route::post("/pruducts",[ProductController::class,'store']);

Route::resource("/pruducts",ProductController::class);

Route::get("/pruducts/search/{name}",[ProductController::class,'search']);
