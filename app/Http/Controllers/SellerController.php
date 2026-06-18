<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard()
    {
        return view('seller.dashboard');
    }

    public function createProduct()
    {
        return view('seller.create_product');
    }

    public function products()
    {
        return view('seller.products'); 
    }
}