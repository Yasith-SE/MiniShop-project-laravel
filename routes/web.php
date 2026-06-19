<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/register/seller', function () {
    return view('auth.seller-register');
})->middleware('guest')->name('seller.register');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/cart/add', [CartController::class, 'addToCart'])
    ->middleware(['auth', 'verified', 'role:customer'])
    ->name('cart.add');

Route::get('/dashboard', function () {
    $role = str_replace('-', '_', Auth::user()->role ?? 'customer');

    if (in_array($role, ['admin', 'super_admin'], true)) {
        return redirect()->route('admin.dashboard');
    }

    if ($role === 'seller') {
        return redirect()->route('seller.dashboard');
    }

    return redirect()->route('customer.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'role:customer'])
    ->prefix('customer')
    ->name('customer.')
    ->group(function () {
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
    });

Route::redirect('/super-admin', '/admin/dashboard')
    ->middleware(['auth', 'verified', 'role:admin,super_admin']);

Route::redirect('/super-admin/dashboard', '/admin/dashboard')
    ->middleware(['auth', 'verified', 'role:admin,super_admin']);

Route::middleware(['auth', 'verified', 'role:admin,super_admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/sellers', [AdminController::class, 'sellers'])->name('sellers');
        Route::get('/sellers/{id}', [AdminController::class, 'showSeller'])->name('sellers.show');
        Route::get('/customers', [AdminController::class, 'customers'])->name('customers');
        Route::get('/products', [AdminController::class, 'products'])->name('products');
    });

Route::middleware(['auth', 'verified', 'role:seller'])
    ->prefix('seller')
    ->name('seller.')
    ->group(function () {
        Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('/products', [SellerController::class, 'products'])->name('products');
        Route::get('/products/create', [SellerController::class, 'createProduct'])->name('products.create');
        Route::post('/products', [SellerController::class, 'storeProduct'])->name('products.store');
        Route::get('/orders', [SellerController::class, 'orders'])->name('orders');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
