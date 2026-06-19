@extends('layouts.admin')

@section('admin_content')
<div class="p-8 space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-900">System Dashboard</h1>
        <p class="text-gray-500 text-sm mt-1">Overview of registered users and platform statistics.</p>
    </div>

    <!-- Real Data Stat Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <p class="text-gray-500 text-sm font-semibold mb-1">Total Sellers</p>
            <h3 class="text-3xl font-bold text-[#ad292f]">{{ $totalSellers }}</h3>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <p class="text-gray-500 text-sm font-semibold mb-1">Total Customers</p>
            <h3 class="text-3xl font-bold text-gray-900">{{ $totalCustomers }}</h3>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <p class="text-gray-500 text-sm font-semibold mb-1">Total Products</p>
            <h3 class="text-3xl font-bold text-gray-900">{{ $totalProducts }}</h3>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <p class="text-gray-500 text-sm font-semibold mb-1">Total Revenue</p>
            <h3 class="text-3xl font-bold text-green-600">Rs. {{ number_format($totalRevenue, 2) }}</h3>
        </div>
    </div>
</div>
@endsection     