@extends('layouts.seller')

@section('seller_content')
<div class="max-w-5xl mx-auto space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Seller Dashboard</h1>
            <p class="text-gray-500 text-sm mt-1">Here is your store's performance at a glance.</p>
        </div>
        <a href="{{ route('seller.products.create') }}" class="bg-secondary text-white px-6 py-2.5 rounded-lg font-bold hover:bg-orange-600 transition">+ Add New Product</a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="col-span-2 bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex flex-col justify-between relative overflow-hidden">
            <div class="absolute top-6 right-6 bg-red-100 text-primary text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1">
                <span class="material-symbols-outlined text-[14px]">star</span> Top Rated Seller
            </div>
            <h2 class="text-lg font-bold mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary">workspace_premium</span> Performance Overview
            </h2>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <p class="text-gray-500 text-sm">Total Sales (30d)</p>
                    <h3 class="text-3xl font-bold text-secondary mt-1">$12,450</h3>
                    <p class="text-green-600 text-xs mt-2 font-bold flex items-center"><span class="material-symbols-outlined text-[14px]">trending_up</span> +14.5% vs last month</p>
                </div>
                <div class="border-l border-gray-100 pl-4">
                    <p class="text-gray-500 text-sm">Store Rating</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">4.9 / 5.0</h3>
                    <p class="text-gray-400 text-xs mt-2">Based on 1,240 reviews</p>
                </div>
                <div class="border-l border-gray-100 pl-4">
                    <p class="text-gray-500 text-sm">Response Rate</p>
                    <h3 class="text-3xl font-bold text-gray-900 mt-1">98%</h3>
                    <p class="text-gray-400 text-xs mt-2">Avg. response time: <1hr</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm flex flex-col items-center justify-center text-center">
            <div class="w-20 h-24 border-4 border-primary rounded-xl flex items-center justify-center relative mb-4">
                <span class="text-4xl font-bold text-primary">4</span>
                <span class="absolute -bottom-3 bg-primary text-white text-[10px] font-bold px-2 py-0.5 rounded-full tracking-wider">LEVEL</span>
            </div>
            <h3 class="font-bold text-lg">Level 4 Seller</h3>
            <p class="text-sm text-gray-500 mt-2 mb-4">You are $550 away from reaching Level 5!</p>
            <div class="w-full bg-gray-100 rounded-full h-2 mb-4">
                <div class="bg-primary h-2 rounded-full" style="width: 80%"></div>
            </div>
            <a href="#" class="text-primary font-bold text-sm hover:underline">View Benefits</a>
        </div>
    </div>
</div>
@endsection