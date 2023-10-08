<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes V1
|--------------------------------------------------------------------------
|
| Version 1
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();
});

Route::post('register-user', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::get('products', [ProductController::class, 'index']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth:sanctum', 'checkAdmin'])->group(function () {

    Route::get('test', [AuthController::class, 'test']);

    Route::post('product-create', [ProductController::class, 'create']);

    Route::match(['put', 'patch'], 'product-edit/{id}', [ProductController::class, 'update']);

    Route::delete('product-delete/{id}', [ProductController::class, 'destroy']);
});
