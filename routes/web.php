<?php

use App\Http\Controllers\Auth\Authentication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterUserController;
use App\Models\Product;

Route::get('/', function () {
 return view('welcome');
});

Route::get('/login', [Authentication::class, 'create'])->name('login');
Route::post('/login', [Authentication::class, 'login'])->name('login.user');

Route::get('/logout', [Authentication::class, 'logout'])->name('logout');

Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.user');

Route::get('/dashboard', function () {
    $products = Product::paginate(10);
    return view('products.index', ['products' => $products]);
})->middleware(['auth'])->name('dashboard');

Route::resource('/products', ProductController::class)->names('products');
