<?php

use App\Http\Controllers\user\HomePageController;
use App\Http\Controllers\user\LoginController;
use Illuminate\Support\Facades\Route;



Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('process-login','doLogin')->name('do.login');
    Route::get('register','register')->name('register');
    Route::post('process-register','doRegister')->name('do.register');

});
