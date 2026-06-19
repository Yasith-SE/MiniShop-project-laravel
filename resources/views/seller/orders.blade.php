@extends('layouts.seller')

@section('seller_content')
<div class="max-w-5xl mx-auto space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-900">Orders</h1>
        <p class="text-gray-500 text-sm mt-1">Track orders for products sold by your store.</p>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-10 text-center">
            <span class="material-symbols-outlined text-[52px] text-gray-300">receipt_long</span>
            <h2 class="text-lg font-bold text-gray-900 mt-3">No orders yet</h2>
            <p class="text-sm text-gray-500 mt-1">Orders will appear here after customers buy your products.</p>
        </div>
    </div>
</div>
@endsection
