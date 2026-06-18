@extends('layouts.seller')

@section('seller_content')
<div class="max-w-5xl mx-auto space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Seller Dashboard</h1>
            <p class="text-gray-500 text-sm mt-1">Here is your store's performance at a glance.</p>
        </div>
        <a href="{{ route('seller.products.create') }}" class="bg-secondary text-white px-6 py-2.5 rounded-lg font-bold hover:bg-orange-600 transition shadow-sm">+ Add New Product</a>
    </div>

    <!-- Performance Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="col-span-2 bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex flex-col justify-between relative overflow-hidden">
            
            <!-- Top Rated Badge (Level 3 ට වඩා වැඩිනම් විතරක් පෙන්නනවා) -->
            @if($sellerLevel >= 3)
            <div class="absolute top-6 right-6 bg-red-100 text-primary text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1">
                <span class="material-symbols-outlined text-[14px]">star</span> Top Rated Seller
            </div>
            @endif

            <h2 class="text-lg font-bold mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary">workspace_premium</span> Performance Overview
            </h2>
            
            <div class="grid grid-cols-3 gap-4">
                <!-- Products Count -->
                <div>
                    <p class="text-gray-500 text-sm font-semibold">Total Products</p>
                    <h3 class="text-4xl font-bold text-secondary mt-1">{{ $totalProducts }}</h3>
                    <p class="text-green-600 text-xs mt-2 font-bold flex items-center"><span class="material-symbols-outlined text-[14px]">inventory_2</span> Active in Store</p>
                </div>
                
                <!-- Dynamic Sales -->
                <div class="border-l border-gray-100 pl-6">
                    <p class="text-gray-500 text-sm font-semibold">Total Sales (30d)</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">Rs. {{ number_format($totalSales, 2) }}</h3>
                    <p class="text-gray-400 text-xs mt-2">Estimated Revenue</p>
                </div>
                
                <!-- Dynamic Rating -->
                <div class="border-l border-gray-100 pl-6">
                    <p class="text-gray-500 text-sm font-semibold">Store Rating</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ number_format($storeRating, 1) }} / 5.0</h3>
                    <p class="text-gray-400 text-xs mt-2">Based on {{ $totalReviews }} reviews</p>
                </div>
            </div>
        </div>

        <!-- Dynamic Level & Progress Bar -->
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex flex-col items-center justify-center text-center">
            <div class="w-20 h-24 border-4 {{ $sellerLevel == 0 ? 'border-gray-300 bg-gray-50' : 'border-primary bg-red-50' }} rounded-xl flex items-center justify-center relative mb-4 transition-colors">
                <span class="text-4xl font-bold {{ $sellerLevel == 0 ? 'text-gray-400' : 'text-primary' }}">{{ $sellerLevel }}</span>
                <span class="absolute -bottom-3 {{ $sellerLevel == 0 ? 'bg-gray-400' : 'bg-primary' }} text-white text-[10px] font-bold px-2 py-0.5 rounded-full tracking-wider">LEVEL</span>
            </div>
            <h3 class="font-bold text-lg text-gray-900">
                {{ $sellerLevel == 0 ? 'New Seller' : 'Level ' . $sellerLevel . ' Seller' }}
            </h3>
            <p class="text-sm text-gray-500 mt-2 mb-4">You are Rs. {{ number_format($salesToNextLevel) }} away from reaching Level {{ $sellerLevel + 1 }}!</p>
            
            <!-- Dynamic Progress Bar (Width changes based on sales) -->
            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                <div class="bg-primary h-2.5 rounded-full transition-all duration-1000" style="width: {{ $progressPercentage }}%"></div>
            </div>
            <a href="#" class="text-primary font-bold text-sm hover:underline">View Benefits</a>
        </div>
    </div>
</div>
@endsection