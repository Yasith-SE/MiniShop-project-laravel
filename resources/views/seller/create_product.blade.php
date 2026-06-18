@extends('layouts.seller')

@section('seller_content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-[#ad292f] text-white p-5 rounded-t-xl flex justify-between items-center shadow-sm">
        <h1 class="text-xl font-bold">Add New Product</h1>
        <button><span class="material-symbols-outlined">notifications</span></button>
    </div>

    <form method="POST" action="{{ route('seller.products.store') }}" enctype="multipart/form-data" class="space-y-6 pb-20">
        @csrf <!-- Security Token -->

        <!-- Basic Information -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-orange-600">info</span> Basic Information
            </h2>
            
            <div class="space-y-4 text-sm font-semibold text-gray-800">
                <div>
                    <label class="block mb-1.5">Product Title <span class="text-red-500">*</span></label>
                    <input type="text" name="name" required placeholder="e.g., Wireless Noise-Cancelling Headphones" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1.5">Category <span class="text-red-500">*</span></label>
                        <select name="category" required class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal cursor-pointer text-gray-700">
                            <option value="">Select a category</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Home">Home</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Image (Real File Upload) -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-orange-600">image</span> Product Image <span class="text-red-500">*</span>
            </h2>
            
            <div class="border-2 border-dashed border-red-200 bg-red-50/30 rounded-xl p-8 flex flex-col items-center justify-center text-center mb-4 transition hover:bg-red-50/50">
                <span class="material-symbols-outlined text-red-300 text-[48px] mb-2">cloud_upload</span>
                <p class="font-bold text-sm text-gray-800 mb-3">Upload your product image</p>
                <!-- Actual File Input -->
                <input type="file" name="image" accept="image/*" required class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-100 file:text-red-700 hover:file:bg-red-200 cursor-pointer">
            </div>
        </div>

        <!-- Pricing & Inventory -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-orange-600">payments</span> Pricing & Inventory
            </h2>
            
            <div class="grid grid-cols-2 gap-6 text-sm font-semibold text-gray-800">
                <div>
                    <label class="block mb-1.5">Original Price (Rs.) <span class="text-red-500">*</span></label>
                    <input type="number" step="0.01" name="price" required placeholder="1000.00" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
                <div>
                    <label class="block mb-1.5">Discounted Selling Price (Rs.) <span class="font-normal text-gray-500">(Optional)</span></label>
                    <input type="number" step="0.01" name="discount_price" placeholder="850.00" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
                <div>
                    <label class="block mb-1.5">Stock Quantity <span class="text-red-500">*</span></label>
                    <input type="number" name="stock" required placeholder="50" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
            <button type="submit" class="px-8 py-3 bg-[#fe752a] text-white font-bold rounded-lg hover:bg-orange-600 transition shadow-sm text-sm">Publish Product</button>
        </div>
    </form>
</div>
@endsection