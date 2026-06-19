@extends('layouts.seller')

@section('seller_content')
<div class="max-w-6xl mx-auto space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">My Products</h1>
            <p class="text-gray-500 text-sm mt-1">Manage the products published by your seller account.</p>
        </div>
        <a href="{{ route('seller.products.create') }}" class="bg-secondary text-white px-6 py-2.5 rounded-lg font-bold hover:bg-orange-600 transition shadow-sm">
            Add Product
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg text-sm font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-bold text-xs uppercase tracking-wider">
                        <th class="p-4">Product Details</th>
                        <th class="p-4">Category</th>
                        <th class="p-4 text-right">Price</th>
                        <th class="p-4 text-center">Stock</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                    @forelse($products as $product)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-lg bg-gray-50 border border-gray-200 overflow-hidden shrink-0 flex items-center justify-center">
                                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover mix-blend-multiply p-1">
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900 line-clamp-1">{{ $product->name }}</div>
                                    <div class="text-gray-500 text-xs mt-0.5">ID: PRD-{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <span class="bg-gray-100 border border-gray-200 px-2.5 py-1 rounded text-xs font-bold text-gray-600">{{ $product->category }}</span>
                        </td>
                        <td class="p-4 text-right font-bold text-[#fe752a]">
                            Rs. {{ number_format($product->price, 2) }}
                        </td>
                        <td class="p-4 text-center">
                            @if($product->stock > 0)
                                <span class="font-semibold text-gray-700">{{ $product->stock }}</span>
                            @else
                                <span class="font-bold text-red-500 text-xs bg-red-50 px-2 py-1 rounded">Out of Stock</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="p-10 text-center text-gray-500">
                            <div class="flex flex-col items-center gap-3">
                                <span class="material-symbols-outlined text-[44px] text-gray-300">inventory_2</span>
                                <p class="font-semibold">You have not published any products yet.</p>
                                <a href="{{ route('seller.products.create') }}" class="text-[#fe752a] font-bold hover:underline">Add your first product</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
