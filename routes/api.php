<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductVarientController;
use App\Http\Controllers\Api\ProductCategoryController;
use App\Http\Controllers\Api\ProductSubCategoryController;
use App\Http\Controllers\Api\PriceDecisionFactorController;
use App\Http\Controllers\Api\ProductVarientValueController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('product-categories', [ProductCategoryController::class, 'index']);
Route::post('product-category', [ProductCategoryController::class, 'store']);

Route::get('product-sub-categories', [ProductSubCategoryController::class, 'index']);
Route::post('product-sub-category', [ProductSubCategoryController::class, 'store']);

Route::get('product-varients', [ProductVarientController::class, 'index']);
Route::post('product-varient', [ProductVarientController::class, 'store']);

Route::get('product-varient-values', [ProductVarientValueController::class, 'index']);
Route::post('product-varient-value', [ProductVarientValueController::class, 'store']);

Route::get('price-decision-factors', [PriceDecisionFactorController::class, 'index']);
Route::post('price-decision-factor', [PriceDecisionFactorController::class, 'store']);


Route::get('products', [ProductController::class, 'index']);
Route::post('product', [ProductController::class, 'store']);
