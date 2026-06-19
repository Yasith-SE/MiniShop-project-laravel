<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function dashboard()
    {
        $totalProducts = Product::where('seller_id', Auth::id())->count();
        $totalSales = 0;
        $storeRating = 0.0;
        $totalReviews = 0;

        $sellerLevel = 0;
        $nextLevelTarget = 10000;

        if ($totalSales >= 50000) {
            $sellerLevel = 4;
            $nextLevelTarget = 100000;
        } elseif ($totalSales >= 25000) {
            $sellerLevel = 3;
            $nextLevelTarget = 50000;
        } elseif ($totalSales >= 10000) {
            $sellerLevel = 2;
            $nextLevelTarget = 25000;
        } elseif ($totalSales > 0) {
            $sellerLevel = 1;
        }

        $salesToNextLevel = $nextLevelTarget - $totalSales;
        $progressPercentage = min(100, ($totalSales / $nextLevelTarget) * 100);

        return view('seller.dashboard', compact(
            'totalProducts',
            'totalSales',
            'storeRating',
            'totalReviews',
            'sellerLevel',
            'salesToNextLevel',
            'progressPercentage'
        ));
    }

    public function createProduct()
    {
        return view('seller.create_product');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lte:price',
            'stock' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $imageUrl = 'https://via.placeholder.com/500';

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $imageUrl = asset('storage/'.$imagePath);
        }

        $originalPrice = (float) $request->price;
        $sellingPrice = $request->filled('discount_price') ? (float) $request->discount_price : $originalPrice;
        $discountPercentage = null;

        if ($request->filled('discount_price') && $originalPrice > 0) {
            $discountPercentage = round((($originalPrice - $sellingPrice) / $originalPrice) * 100);
        }

        Product::create([
            'seller_id' => Auth::id(),
            'name' => $request->name,
            'category' => $request->category,
            'price' => $sellingPrice,
            'original_price' => $originalPrice,
            'discount_percentage' => $discountPercentage,
            'stock' => $request->stock,
            'image_url' => $imageUrl,
        ]);

        return redirect()->route('seller.products')->with('success', 'Product published successfully!');
    }

    public function products()
    {
        $products = Product::where('seller_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('seller.products', compact('products'));
    }

    public function orders()
    {
        $orders = [];

        return view('seller.orders', compact('orders'));
    }
}
