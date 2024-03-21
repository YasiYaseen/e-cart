<?php

use App\Http\Controllers\admin\AdminDashBoardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Middleware\AdminLoginCheck;
use Illuminate\Support\Facades\Route;

//dashboard
Route::controller(AdminDashBoardController::class)->middleware([AdminLoginCheck::class])->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
});

//login
Route::controller(AdminLoginController::class)->group(function () {
    Route::get('login', 'loginPage')->name('login');
    Route::post('process-login', 'doLogin')->name('do.login');
    Route::get('logout', 'logout')->name('logout')->middleware(AdminLoginCheck::class);
});

//products
Route::controller(ProductController::class)->middleware([AdminLoginCheck::class])->group(function () {
    Route::get('products', 'products')->name('products');
    Route::get('create-product', 'create')->name('products.create');
    Route::post('save-product', 'save')->name('product.save');
    Route::get('delete/{id}', 'delete')->name('product.delete');
});
