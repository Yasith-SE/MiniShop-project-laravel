<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Dummy stats for figma dashboard representation
        $totalSold = 1432;
        $totalRevenue = 45210.00;
        $returnRate = "4.2%";
        
        // Dynamic products table data limit 3 for overview
        $recentProducts = Product::latest()->take(3)->get();
        $recentUsers = User::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalSold', 'totalRevenue', 'returnRate', 'recentProducts', 'recentUsers'));
    }

    public function products()
    {
        $products = Product::paginate(10); // Pagination handle wenawa professional vidiyata
        return view('admin.products', compact('products'));
    }

    public function users()
    {
        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }
}