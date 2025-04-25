<?php

use App\Http\Controllers\Auth\Authentication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
 return view('welcome');
});

Route::get('/login', Authentication::class)->name('login');
// Route::post('');
Route::resource('products', ProductController::class);