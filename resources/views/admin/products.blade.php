@extends('layouts.admin')

@section('admin_content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold">Products Inventory</h1>
            <p class="text-gray-500 text-sm mt-1">Manage and update your stock items dynamic database.</p>
        </div>
        <button class="bg-secondary text-white px-6 py-2.5 rounded-lg font-bold hover:opacity-90 shadow-sm">+ Add New Product</button>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200 text-gray-500 font-semibold text-sm">
                    <th class="p-4">Product Details</th>
                    <th class="p-4">Category</th>
                    <th class="p-4">Price</th>
                    <th class="p-4">Stock Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-on-surface">
                @foreach($products as $product)
                <tr class="hover:bg-gray-50/50">
                    <td class="p-4 flex items-center gap-3">
                        <img class="w-10 h-10 object-cover rounded-md" src="{{ $product->image_url }}" alt="">
                        <div>
                            <p class="font-bold">{{ $product->name }}</p>
                        </div>
                    </td>
                    <td class="p-4 text-gray-500">{{ $product->category }}</td>
                    <td class="p-4 font-bold">Rs. {{ number_format($product->price, 2) }}</td>
                    <td class="p-4">
                        <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-800">In Stock ({{ $product->stock }})</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4 bg-gray-50 border-t border-gray-200">
            {{ $products->links() }} {{-- Pagination links render wenna --}}
        </div>
    </div>
</div>
@endsection