<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sections\SectionController;


Route::get('/', [HomeController::class, 'index'])->name('landingPage');
Route::controller(RegisterController::class)->group(function(){
    Route::get('/register/{planId}/{isYearly}/{userValue}/{sitesCount}/{costPerValue}','index')->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

});
Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login.form');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');

});



route::get('/iphone',function(){
    return view('layouts.iphone');
 });
 route::get('/ipad',function(){
    return view('layouts.ibad');
 });
//


Route::middleware(['auth'])->group(function () {

    require base_path('app/Modules/Category/routes.php');
require base_path('app/Modules/Product/routes.php');
require base_path('app/Modules/Auction/routes.php');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/edit-section',[SectionController::class,'editSections'])->name('edit.section');

});



// Route::get('/charge', [PaymentController::class, 'charge'])->name('charge');






