<?php
use Illuminate\Support\Facades\Route;
use App\Modules\Auction\Controllers\AuctionController;
use App\Modules\Auction\Controllers\AuctionApiController;

Route::prefix('auctions')->group(function () {
    Route::get('/', [AuctionController::class, 'index'])->name('auctions.index');
    Route::get('/get-all-auctions', [AuctionController::class, 'getAllActions'])->name('auctions.allActions');

});

Route::prefix('api/auctions')->group(function () {
    Route::get('/', [AuctionApiController::class, 'index']);
});
