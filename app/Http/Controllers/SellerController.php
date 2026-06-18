<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SellerController extends Controller
{
    // 1. Seller Dashboard View
    public function dashboard()
    {
        $totalProducts = Product::count(); 

        // Real Data Variables (Orders ආවම මේවා auto හැදෙන්න හදමු)
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
            $nextLevelTarget = 10000;
        }

        $salesToNextLevel = $nextLevelTarget - $totalSales;
        $progressPercentage = ($totalSales / $nextLevelTarget) * 100;

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

    // 2. Add New Product View
    public function createProduct()
    {
        return view('seller.create_product');
    }

    // 3. Save Product to Database
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $imageUrl = asset('storage/' . $imagePath);
        }

        $originalPrice = $request->price;
        $sellingPrice = $request->discount_price ?: $originalPrice;
        $discountPercentage = null;
        
        if ($request->discount_price && $originalPrice > 0) {
            $discountPercentage = round((($originalPrice - $sellingPrice) / $originalPrice) * 100);
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $sellingPrice,
            'original_price' => $originalPrice,
            'discount_percentage' => $discountPercentage,
            'stock' => $request->stock,
            'image_url' => $imageUrl ?? 'https://via.placeholder.com/500',
        ]);

        return redirect()->route('seller.dashboard')->with('success', 'Product published successfully!');
    }

    // 4. View Seller's Product Inventory
    public function products()
    {
        $products = Product::latest()->paginate(10);
        return view('seller.products', compact('products'));
    }

    // 5. View Seller's Orders
    public function orders()
    {
        // Dummy data අයින් කරලා හිස් Array එකක් යවනවා ඇත්ත Orders එනකන්
        $orders = [];
        
        return view('seller.orders', compact('orders'));
    }
}