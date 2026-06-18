@extends('layouts.seller')

@section('seller_content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-[#ad292f] text-white p-5 rounded-t-xl flex justify-between items-center shadow-sm">
        <h1 class="text-xl font-bold">Add New Product</h1>
        <button><span class="material-symbols-outlined">notifications</span></button>
    </div>

    <form class="space-y-6 pb-20">
        <!-- Basic Information -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-orange-600">info</span> Basic Information
            </h2>
            
            <div class="space-y-4 text-sm font-semibold text-gray-800">
                <div>
                    <label class="block mb-1.5">Product Title <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="e.g., Wireless Noise-Cancelling Headphones" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1.5">Category <span class="text-red-500">*</span></label>
                        <select class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal cursor-pointer text-gray-500">
                            <option>Select a category</option>
                            <option>Electronics</option>
                            <option>Fashion</option>
                        </select>
                    </div>
                    <div>
                        <label class="block mb-1.5">Brand</label>
                        <input type="text" placeholder="e.g., Sony" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                    </div>
                </div>

                <div>
                    <label class="block mb-1.5">Product Description <span class="text-red-500">*</span></label>
                    <div class="border border-gray-300 rounded-lg overflow-hidden">
                        <div class="bg-gray-50 border-b border-gray-300 p-2 flex gap-3 text-gray-600">
                            <button type="button" class="font-bold font-serif hover:text-black">B</button>
                            <button type="button" class="italic font-serif hover:text-black">I</button>
                            <button type="button" class="hover:text-black"><span class="material-symbols-outlined text-[18px]">format_list_bulleted</span></button>
                        </div>
                        <textarea rows="4" placeholder="Detailed description of your product..." class="w-full p-3 border-none focus:ring-0 font-normal outline-none resize-none"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Images -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                    <span class="material-symbols-outlined text-orange-600">image</span> Product Images
                </h2>
                <span class="text-xs text-gray-400 font-bold">Up to 5 images</span>
            </div>
            
            <div class="border-2 border-dashed border-red-200 bg-red-50/30 rounded-xl p-10 flex flex-col items-center justify-center text-center mb-4 transition hover:bg-red-50/50 cursor-pointer">
                <span class="material-symbols-outlined text-red-300 text-[48px] mb-2">cloud_upload</span>
                <p class="font-bold text-sm text-gray-800">Drag and drop images here</p>
                <p class="text-xs text-gray-500 mb-4">or</p>
                <button type="button" class="border border-red-600 text-red-600 font-bold text-xs px-4 py-2 rounded bg-white hover:bg-red-50">Browse Files</button>
                <p class="text-[10px] text-gray-400 mt-4">Recommended size: 1080x1080px.<br>Max file size: 5MB. JPG, PNG, WEBP.</p>
            </div>
            
            <div class="flex gap-4">
                <div class="w-24 h-24 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 border border-gray-200"><span class="material-symbols-outlined">photo_camera</span></div>
                <div class="w-24 h-24 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 border border-gray-200"><span class="material-symbols-outlined">photo_camera</span></div>
            </div>
        </div>

        <!-- Pricing & Inventory -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-orange-600">payments</span> Pricing & Inventory
            </h2>
            
            <div class="grid grid-cols-2 gap-6 text-sm font-semibold text-gray-800">
                <div>
                    <label class="block mb-1.5">Price <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute left-3 top-2.5 text-gray-500 font-normal">$</span>
                        <input type="text" placeholder="0.00" class="w-full border border-gray-300 rounded-lg pl-7 py-2.5 focus:ring-orange-600 outline-none font-normal">
                    </div>
                </div>
                <div>
                    <label class="block mb-1.5">Discount Price <span class="font-normal text-gray-500">(Optional)</span></label>
                    <div class="relative">
                        <span class="absolute left-3 top-2.5 text-gray-500 font-normal">$</span>
                        <input type="text" placeholder="0.00" class="w-full border border-gray-300 rounded-lg pl-7 py-2.5 focus:ring-orange-600 outline-none font-normal">
                    </div>
                </div>
                <div>
                    <label class="block mb-1.5">SKU (Stock Keeping Unit)</label>
                    <input type="text" placeholder="e.g., HDPH-WRLS-001" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
                <div>
                    <label class="block mb-1.5">Stock Quantity <span class="text-red-500">*</span></label>
                    <input type="number" placeholder="0" class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-orange-600 outline-none font-normal">
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
            <button type="button" class="px-6 py-2.5 bg-gray-100 text-gray-700 font-bold rounded-lg hover:bg-gray-200 transition text-sm">Save as Draft</button>
            <button type="submit" class="px-6 py-2.5 bg-[#fe752a] text-white font-bold rounded-lg hover:bg-orange-600 transition text-sm shadow-sm">Publish Product</button>
        </div>
    </form>
</div>
@endsection