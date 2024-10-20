<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

Route::get('/',[UserAuthController::class,'show'])->name('home');
Route::get('/cart',[UserAuthController::class,'cart'])->name('cart');
Route::get('/login-page',[UserAuthController::class,'showLogin'])->name('login-page');
Route::get('/register-page',[UserAuthController::class,'showRegister'])->name('register-page');
Route::post('/login',[UserAuthController::class,'Login'])->name('login');
Route::get('/logout',[UserAuthController::class,'logout'])->name('logout');
Route::post('/register',[UserAuthController::class,'Register'])->name('register');