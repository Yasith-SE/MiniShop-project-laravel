<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function dashboard()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        $cartCount = $cartItems->sum('quantity');
        $cartTotal = $cartItems->sum(
            fn (Cart $item): float => (float) ($item->product?->price ?? 0) * $item->quantity
        );
        $latestProducts = Product::latest()->take(4)->get();

        return view('customer.dashboard', compact('cartItems', 'cartCount', 'cartTotal', 'latestProducts'));
    }
}
