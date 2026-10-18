<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovesController;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;



Route::get('/login ', [AuthController::class ,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class ,'login'])->name('login.submit') ;

Route::get('/register ',[AuthController::class,'showsingupform'])->name('register.showsingupform');
Route::post('/register',[AuthController::class,'register'])->name('register.register');

Route::post('/logout ',  [AuthController::class ,'logout'])->name('logout');



Route::get('/moves', [MovesController::class, 'index'])->name('moves')
-> middleware('auth') ;


Route::get('/moves', [MovesController::class, 'search'])->name('moves.search')
-> middleware('auth') ;



Route::middleware(['admin'])->group(function(){

  Route::get('/', [AuthController::class ,'index']);
});
