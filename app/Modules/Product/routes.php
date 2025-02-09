<?php
use Illuminate\Support\Facades\Route;
use App\Modules\Product\Controllers\ProductController;
use App\Modules\Product\Controllers\ProductApiController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');

    Route::get('/get-all-products', [ProductController::class, 'getAllProductData'])->name('products.data');
    Route::get('/get-fillter-product', [ProductController::class, 'searchProduct'])->name('products.fillter');

});

//Route::prefix('api/products')->group(function () {
//    Route::get('/', [ProductApiController::class, 'index']);
//});
Route::apiResource('products', ProductController::class);
