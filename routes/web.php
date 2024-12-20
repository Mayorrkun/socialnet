<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserCartController;

Route::get('/',[UserAuthController::class,'show'])->name('home');
Route::get('/cart',[UserCartController::class,'index'])->name('cart');
Route::get('/login-page',[UserAuthController::class,'showLogin'])->name('login-page');
Route::get('/register-page',[UserAuthController::class,'showRegister'])->name('register-page');
Route::post('/login',[UserAuthController::class,'Login'])->name('login');
Route::get('/logout',[UserAuthController::class,'logout'])->name('logout');
Route::post('/register',[UserAuthController::class,'Register'])->name('register');

Route::get('/products/{id}',[ProductController::class,'show'])->name('product-page');
Route::post('/cart/add/{productId}', [UserCartController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('/cart/remove/{productId}',[UserCartController::class, 'remove_from_cart'])->name('remove-from-cart');
Route::get('/cart/increase/{productId}',[UserCartController::class, 'increase'])->name('increase');
Route::get('/cart/decrease/{productId}',[UserCartController::class, 'decrease'])->name('decrease');
