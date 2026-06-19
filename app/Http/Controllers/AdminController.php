<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalSellers = User::where('role', 'seller')->count();
        $totalCustomers = User::where('role', 'customer')->count();
        $totalProducts = Product::count();
        $totalRevenue = 0;

        return view('admin.dashboard', compact('totalSellers', 'totalCustomers', 'totalProducts', 'totalRevenue'));
    }

    public function sellers()
    {
        $sellers = User::where('role', 'seller')
            ->withCount('products')
            ->latest()
            ->paginate(10);

        return view('admin.sellers', compact('sellers'));
    }

    public function showSeller($id)
    {
        $seller = User::where('role', 'seller')
            ->withCount('products')
            ->findOrFail($id);
        $products = $seller->products()->latest()->take(5)->get();

        return view('admin.seller_details', compact('seller', 'products'));
    }

    public function customers()
    {
        $customers = User::where('role', 'customer')
            ->latest()
            ->paginate(10);

        return view('admin.customers', compact('customers'));
    }

    public function products()
    {
        $products = Product::with('seller')
            ->latest()
            ->paginate(10);

        return view('admin.products', compact('products'));
    }
}
