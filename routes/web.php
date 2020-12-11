<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/getmobile/{mobile}',\App\Http\Controllers\PhoneController::class,'setVerificationCode');
Route::get('/getmobile/{mobile}/{code}' , \App\Http\Controllers\PhoneController::class,'verifyMobile');
