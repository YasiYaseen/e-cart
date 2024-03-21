<?php

use App\Http\Controllers\admin\AdminDashBoardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Middleware\AdminLoginCheck;
use Illuminate\Support\Facades\Route;

//dashboard
Route::controller(AdminDashBoardController::class)->middleware([AdminLoginCheck::class])->group(function(){
    Route::get('/','dashboard')->name('dashboard');
    Route::get('products','loginPage')->name('login');

});

//login
Route::controller(AdminLoginController::class)->group(function (){
    Route::get('login','loginPage')->name('login');
    Route::post('process-login','doLogin')->name('do.login');
    Route::get('logout','logout')->name('logout')->middleware(AdminLoginCheck::class);

});

//products
Route::controller(ProductController::class)->group(function (){
Route::get('products','products')->name('products');
});
