<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;

// Public Storefront
Route::get('/', [HomeController::class, 'index'])->name('home');

// The "Traffic Cop" Redirector
Route::get('/dashboard', function () {
    $role = Auth::user()->role;
    
    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($role === 'seller') {
        return redirect()->route('seller.dashboard');
    } else {
        return redirect('/'); // Normal customers just go back to the shop
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
});

// Seller Routes
Route::middleware(['auth'])->prefix('seller')->name('seller.')->group(function () {
    Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
    Route::get('/products', [SellerController::class, 'products'])->name('products');
    Route::get('/products/create', [SellerController::class, 'createProduct'])->name('products.create');
});

require __DIR__.'/auth.php';