<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;


Route::get('/', [RouteController::class, 'Home']) ->name('home');
Route::get('/about', [RouteController::class, 'About']) ->name('about');
Route::get('/shop', [RouteController::class, 'Shop']) ->name('shop');
Route::get('/contact', [RouteController::class, 'Contact']) ->name('contact');