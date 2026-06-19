@extends('layouts.store')

@section('content')
<div class="max-w-[1280px] mx-auto px-4 md:px-6 py-8 space-y-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">My Dashboard</h1>
            <p class="text-gray-500 text-sm mt-1">Welcome back, {{ Auth::user()->name }}.</p>
        </div>
        <a href="{{ route('home') }}" class="bg-[#ad292f] text-white px-6 py-2.5 rounded-lg font-bold hover:bg-red-800 transition shadow-sm w-fit">
            Continue Shopping
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <p class="text-sm text-gray-500 font-semibold">Cart Items</p>
            <h2 class="text-3xl font-bold text-[#ad292f] mt-1">{{ $cartCount }}</h2>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <p class="text-sm text-gray-500 font-semibold">Cart Total</p>
            <h2 class="text-3xl font-bold text-gray-900 mt-1">Rs. {{ number_format($cartTotal, 2) }}</h2>
        </div>
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <p class="text-sm text-gray-500 font-semibold">Account Type</p>
            <h2 class="text-3xl font-bold text-gray-900 mt-1">Customer</h2>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <section class="lg:col-span-2 bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-5 border-b border-gray-100">
                <h2 class="text-xl font-bold text-gray-900">Cart Summary</h2>
            </div>
            <div class="divide-y divide-gray-100">
                @forelse($cartItems as $item)
                    <div class="p-5 flex items-center gap-4">
                        <div class="w-16 h-16 bg-gray-50 border border-gray-200 rounded-lg overflow-hidden shrink-0">
                            <img src="{{ $item->product?->image_url }}" alt="{{ $item->product?->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-bold text-gray-900 truncate">{{ $item->product?->name ?? 'Removed product' }}</h3>
                            <p class="text-sm text-gray-500">Qty: {{ $item->quantity }}</p>
                        </div>
                        <div class="font-bold text-[#ad292f]">
                            Rs. {{ number_format((float) ($item->product?->price ?? 0) * $item->quantity, 2) }}
                        </div>
                    </div>
                @empty
                    <div class="p-10 text-center text-gray-500">
                        <span class="material-symbols-outlined text-[48px] text-gray-300">shopping_cart</span>
                        <p class="font-semibold mt-2">Your cart is empty.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <section class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="p-5 border-b border-gray-100">
                <h2 class="text-xl font-bold text-gray-900">New Arrivals</h2>
            </div>
            <div class="divide-y divide-gray-100">
                @forelse($latestProducts as $product)
                    <a href="{{ route('home') }}" class="p-4 flex items-center gap-3 hover:bg-gray-50 transition">
                        <div class="w-12 h-12 bg-gray-50 border border-gray-200 rounded-lg overflow-hidden shrink-0">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="min-w-0">
                            <p class="font-bold text-sm text-gray-900 truncate">{{ $product->name }}</p>
                            <p class="text-xs text-[#fe752a] font-bold">Rs. {{ number_format($product->price, 2) }}</p>
                        </div>
                    </a>
                @empty
                    <div class="p-8 text-center text-gray-500 text-sm">No products available yet.</div>
                @endforelse
            </div>
        </section>
    </div>
</div>
@endsection
