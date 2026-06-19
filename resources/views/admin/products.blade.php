@extends('layouts.admin')

@section('admin_content')
<div class="space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-gray-900">Products Inventory</h1>
        <p class="text-gray-500 text-sm mt-1">Review products published by sellers across the platform.</p>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[900px]">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-bold text-xs uppercase tracking-wider">
                        <th class="p-4">Product Details</th>
                        <th class="p-4">Seller</th>
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
                            <div class="font-semibold text-gray-900">{{ $product->seller?->name ?? 'Unassigned' }}</div>
                            <div class="text-xs text-gray-500">{{ $product->seller?->email ?? 'No seller attached' }}</div>
                        </td>
                        <td class="p-4">
                            <span class="bg-gray-100 border border-gray-200 px-2.5 py-1 rounded text-xs font-bold text-gray-600">{{ $product->category }}</span>
                        </td>
                        <td class="p-4 text-right font-bold text-[#ad292f]">
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
                        <td colspan="5" class="p-8 text-center text-gray-500">No products available in the system.</td>
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
