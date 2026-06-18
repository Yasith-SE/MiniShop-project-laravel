@extends('layouts.admin')

@section('admin_content')
<div class="space-y-6">
    <div>
        <h1 class="text-3xl font-bold">Sales & Returns Dashboard</h1>
        <p class="text-gray-500 text-sm mt-1">Overview of recent transactions and product returns.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
            <p class="text-gray-400 text-sm">Total Products Sold</p>
            <h3 class="text-3xl font-bold mt-2 text-on-surface">{{ $totalSold }}</h3>
        </div>
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
            <p class="text-gray-400 text-sm">Total Revenue</p>
            <h3 class="text-3xl font-bold mt-2 text-secondary">Rs. {{ number_format($totalRevenue, 2) }}</h3>
        </div>
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
            <p class="text-gray-400 text-sm">Return Rate</p>
            <h3 class="text-3xl font-bold mt-2 text-red-600">{{ $returnRate }}</h3>
        </div>
    </div>

    <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm min-h-[300px] flex flex-col justify-center items-center">
        <div class="w-full h-40 bg-gray-50 rounded border border-dashed flex items-center justify-center text-gray-400">
            [ Interactive Sales Trend Analytical Chart Area ]
        </div>
    </div>
</div>
@endsection