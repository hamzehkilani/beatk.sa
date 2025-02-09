<?php
use Illuminate\Support\Facades\Route;
use App\Modules\Category\Controllers\CategoryController;
use App\Modules\Category\Controllers\CategoryApiController;

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/{category}', [CategoryController::class, 'update'])->name('categories.update');

    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::prefix('api/categories')->group(function () {
    Route::get('/', [CategoryApiController::class, 'index']);
    Route::post('/', [CategoryApiController::class, 'store']);
    Route::delete('/{id}', [CategoryApiController::class, 'destroy']);
});
