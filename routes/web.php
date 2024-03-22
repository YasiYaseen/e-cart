<?php

use App\Http\Controllers\user\HomePageController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\UserCartController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserLoginCheck;
use Illuminate\Support\Facades\Route;



Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'index')->name('home');


});
Route::controller(UserController::class)->middleware([UserLoginCheck::class])->group(function () {
    Route::get('logout', 'logout')->name('logout');
    Route::get('profile', 'profile')->name('profile');
    Route::post('update-profile','updateProfile')->name('profile.update');
    Route::post('save-address','saveAddress')->name('address.save');
    Route::get('delete-address/{id}','deleteAddress')->name('address.delete');

});
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('process-login','doLogin')->name('do.login');
    Route::get('register','register')->name('register');
    Route::post('process-register','doRegister')->name('do.register');


});

Route::controller(UserCartController::class)->middleware([UserLoginCheck::class])->group(function () {
Route::get('cart','cartPage')->name('cart');
});

