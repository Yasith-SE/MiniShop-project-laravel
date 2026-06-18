@extends('layouts.seller')

@section('seller_content')
<div class="max-w-[1200px] mx-auto space-y-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Product Inventory</h1>
            <p class="text-gray-500 text-sm mt-1">Manage your store's products, stock levels, and status.</p>
        </div>
        <a href="{{ route('seller.products.create') }}" class="bg-[#fe752a] text-white px-5 py-2.5 rounded-lg font-bold hover:bg-orange-600 transition shadow-sm flex items-center gap-2">
            <span class="material-symbols-outlined text-[20px]">add</span> Add New Product
        </a>
    </div>

    <!-- Product Table Container -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        
        <!-- Search & Filter Toolbar -->
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50 flex-wrap gap-4">
            <div class="relative w-full md:w-80">
                <span class="material-symbols-outlined absolute left-3 top-2.5 text-gray-400 text-[20px]">search</span>
                <input type="text" placeholder="Search by product name or SKU..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-[#fe752a] focus:border-[#fe752a] outline-none">
            </div>
            <div class="flex items-center gap-3 text-sm">
                <select class="border border-gray-300 rounded-lg focus:ring-[#fe752a] py-2 px-3 text-gray-600 outline-none">
                    <option>All Categories</option>
                    <option>Electronics</option>
                    <option>Fashion</option>
                </select>
                <select class="border border-gray-300 rounded-lg focus:ring-[#fe752a] py-2 px-3 text-gray-600 outline-none">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
                <button class="flex items-center gap-2 px-3 py-2 border border-gray-300 rounded-lg font-semibold text-gray-700 hover:bg-gray-50 transition">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span> Filters
                </button>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-bold text-[11px] uppercase tracking-wider">
                        <th class="p-4">Product Details</th>
                        <th class="p-4">Category</th>
                        <th class="p-4 text-right">Price</th>
                        <th class="p-4 text-center">Stock</th>
                        <th class="p-4 text-center">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                    @foreach($products as $product)
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="p-4 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-lg bg-gray-50 border border-gray-200 overflow-hidden shrink-0 flex items-center justify-center">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover mix-blend-multiply p-1">
                            </div>
                            <div>
                                <div class="font-bold text-gray-900 text-[14px] line-clamp-1">{{ $product->name }}</div>
                                <div class="text-gray-400 text-xs mt-0.5 font-mono">SKU: PRD-{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</div>
                            </div>
                        </td>
                        <td class="p-4">
                            <span class="bg-gray-100 text-gray-600 border border-gray-200 px-2.5 py-1 rounded text-xs font-bold">{{ $product->category }}</span>
                        </td>
                        <td class="p-4 text-right font-bold text-[#fe752a] text-[16px]">
                            Rs. {{ number_format($product->price, 2) }}
                        </td>
                        <td class="p-4 text-center">
                            @if($product->stock > 10)
                                <span class="font-bold text-gray-700">{{ $product->stock }}</span>
                            @elseif($product->stock > 0)
                                <div class="font-bold text-red-600">{{ $product->stock }}</div>
                                <div class="text-[10px] text-red-500 font-bold mt-0.5">Low Stock</div>
                            @else
                                <span class="font-bold text-gray-400">0</span>
                            @endif
                        </td>
                        <td class="p-4 text-center">
                            @if($product->stock > 0)
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold border border-green-200 text-green-700 bg-green-50 flex items-center justify-center gap-1 w-fit mx-auto"><div class="w-1.5 h-1.5 rounded-full bg-green-500"></div> Active</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold border border-gray-200 text-gray-500 bg-gray-50 flex items-center justify-center gap-1 w-fit mx-auto"><div class="w-1.5 h-1.5 rounded-full bg-gray-400"></div> Inactive</span>
                            @endif
                        </td>
                        <td class="p-4 text-right text-gray-400">
                            <button class="hover:text-[#fe752a] transition p-1"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                            <button class="hover:text-red-600 transition p-1"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Links -->
        <div class="p-4 border-t border-gray-100 bg-gray-50">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
