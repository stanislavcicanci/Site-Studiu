<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;


Route::get('/', [RouteController::class, 'Home']) ->name('home');
Route::get('/about', [RouteController::class, 'About']) ->name('about');
Route::get('/shop', [RouteController::class, 'Shop']) ->name('shop');
Route::get('/contact', [RouteController::class, 'Contact']) ->name('contact');
Route::get('/login', [RouteController::class, 'Login']) ->name('login');
Route::post('/login', [RouteController::class, 'LoginPost']) ->name('login.post');
Route::get('/signup', [RouteController::class, 'Signup']) ->name('signup');
Route::post('/signup', [RouteController::class, 'SignupPost']) ->name('signup.post');
Route::get('/logout', [RouteController::class, 'logout']) ->name('logout');