@extends('layouts.store')

@section('content')
<div class="max-w-[1280px] mx-auto px-4 md:px-6 py-8 flex flex-col md:flex-row gap-8">
    
    <aside class="hidden md:flex flex-col w-64 bg-surface rounded-xl shadow-sm border border-outline-variant shrink-0 h-fit sticky top-32">
        <nav class="flex flex-col py-4">
            <a class="flex items-center gap-3 px-6 py-3 bg-red-50 text-primary font-bold hover:bg-gray-50 mx-2 rounded-lg" href="#">
                <span class="material-symbols-outlined">bolt</span> Flash Sale
            </a>
            <a class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 font-medium mx-2 rounded-lg mt-1" href="#">
                <span class="material-symbols-outlined">language</span> Global Collection
            </a>
            <a class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 font-medium mx-2 rounded-lg mt-1" href="#">
                <span class="material-symbols-outlined">devices</span> Digital Goods
            </a>
            <a class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 font-medium mx-2 rounded-lg mt-1" href="#">
                <span class="material-symbols-outlined">confirmation_number</span> Vouchers
            </a>
            <a class="flex items-center gap-3 px-6 py-3 text-gray-500 hover:bg-gray-50 font-medium mx-2 rounded-lg mt-1" href="#">
                <span class="material-symbols-outlined">local_shipping</span> Free Shipping
            </a>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col gap-8 w-full min-w-0">
        
        <section class="relative w-full rounded-xl overflow-hidden aspect-[21/9] md:aspect-[3/1] bg-gray-200 shadow-sm group">
            <img alt="Promo Banner" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?q=80&w=2070&auto=format&fit=crop"/>
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent flex flex-col justify-center px-8 md:px-16">
                <span class="text-orange-400 text-[14px] font-bold uppercase tracking-wider mb-2">Limited Time Offer</span>
                <h1 class="text-white text-[40px] font-bold mb-4 max-w-md">Mega Flash Sale Weekend</h1>
                <p class="text-gray-300 text-[16px] mb-6 max-w-md hidden md:block">Get up to 70% off on top electronics, fashion, and home goods. Exclusive vouchers available now.</p>
                <button class="bg-orange-600 text-white font-bold text-[14px] px-8 py-3 rounded-lg w-fit hover:bg-orange-700 transition-colors shadow-sm">Shop Now</button>
            </div>
        </section>

        <section>
            <h2 class="text-[20px] font-bold text-gray-900 mb-4">Top Categories</h2>
            <div class="grid grid-cols-3 md:grid-cols-6 gap-4">
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow text-center" href="#">
                    <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">smartphone</span>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700">Phones</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow text-center" href="#">
                    <div class="w-12 h-12 rounded-full bg-orange-50 flex items-center justify-center text-orange-600">
                        <span class="material-symbols-outlined">checkroom</span>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700">Apparel</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow text-center" href="#">
                    <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">chair</span>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700">Furniture</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow text-center" href="#">
                    <div class="w-12 h-12 rounded-full bg-orange-50 flex items-center justify-center text-orange-600">
                        <span class="material-symbols-outlined">face</span>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700">Beauty</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow text-center" href="#">
                    <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">sports_esports</span>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700">Gaming</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow text-center" href="#">
                    <div class="w-12 h-12 rounded-full bg-orange-50 flex items-center justify-center text-orange-600">
                        <span class="material-symbols-outlined">watch</span>
                    </div>
                    <span class="text-[13px] font-medium text-gray-700">Watches</span>
                </a>
            </div>
        </section>

        <section x-data="{ isModalOpen: false, activeProduct: {}, quantity: 1 }">
            <div class="flex items-center justify-between mb-4 border-b border-gray-200 pb-2">
                <div class="flex items-center gap-2 text-primary">
                    <span class="material-symbols-outlined text-[24px]">bolt</span>
                    <h2 class="text-[24px] font-bold text-gray-900">On Sale Now</h2>
                </div>
                <a href="#" class="text-xs font-bold text-gray-500 hover:text-primary transition-colors flex items-center">Shop All <span class="material-symbols-outlined text-[16px]">chevron_right</span></a>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden flex flex-col group hover:shadow-lg transition-all duration-300 relative">
                    @if($product->discount_percentage)
                        <div class="absolute top-2 left-2 bg-primary text-white text-[10px] font-bold px-2 py-0.5 rounded z-10">-{{ $product->discount_percentage }}%</div>
                    @endif
                    
                    <div class="aspect-square bg-gray-50 overflow-hidden flex items-center justify-center">
                        <img alt="{{ $product->name }}" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-500 p-4" src="{{ $product->image_url }}"/>
                    </div>
                    
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-[14px] text-gray-800 line-clamp-2 mb-2 group-hover:text-primary transition-colors h-10">{{ $product->name }}</h3>
                        
                        <div class="flex text-yellow-400 text-[14px] mb-2">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                            <span class="text-gray-400 text-xs font-bold ml-1 mt-0.5">(124)</span>
                        </div>

                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1">
                                <span class="text-[18px] font-bold text-orange-600">Rs. {{ number_format($product->price, 2) }}</span>
                                @if($product->original_price)
                                    <span class="text-xs text-gray-400 line-through">Rs. {{ number_format($product->original_price, 2) }}</span>
                                @endif
                            </div>
                            
                            <button 
                                @click="isModalOpen = true; quantity = 1; activeProduct = { 
                                    id: '{{ $product->id }}',
                                    name: '{{ addslashes($product->name) }}', 
                                    price: '{{ number_format($product->price, 2) }}', 
                                    oldPrice: '{{ $product->original_price ? number_format($product->original_price, 2) : '' }}', 
                                    image: '{{ $product->image_url }}',
                                    category: '{{ addslashes($product->category) }}'
                                }" 
                                class="w-full py-2 mt-3 bg-white border border-primary text-primary text-[14px] font-bold rounded-lg hover:bg-primary hover:text-white transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div x-show="isModalOpen" style="display: none;" class="fixed inset-0 z-[100] flex items-center justify-center bg-black bg-opacity-60 backdrop-blur-sm p-4" x-transition>
                <div @click.away="isModalOpen = false" class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl overflow-hidden flex flex-col md:flex-row relative">
                    
                    <button @click="isModalOpen = false" class="absolute top-4 right-4 bg-gray-100 hover:bg-red-100 hover:text-red-600 text-gray-500 rounded-full p-2 transition z-10">
                        <span class="material-symbols-outlined text-[20px] block">close</span>
                    </button>

                    <div class="w-full md:w-1/2 bg-[#f4f4f6] p-8 flex items-center justify-center">
                        <img :src="activeProduct.image" class="mix-blend-multiply w-full max-w-sm drop-shadow-xl" alt="Product Image">
                    </div>

                    <div class="w-full md:w-1/2 p-8 md:p-10 flex flex-col">
                        <p class="text-sm text-gray-500 uppercase tracking-wider font-bold mb-1" x-text="activeProduct.category"></p>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2 leading-tight" x-text="activeProduct.name"></h2>
                        
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-yellow-400 text-[18px]">
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star_half</span>
                            </div>
                            <span class="text-xs font-bold text-gray-400 ml-1">(1,245 Ratings)</span>
                        </div>

                        <div class="flex items-end gap-3 mb-8">
                            <span class="text-3xl font-bold text-orange-600">Rs. <span x-text="activeProduct.price"></span></span>
                            <span class="text-lg text-gray-400 line-through font-semibold mb-1" x-show="activeProduct.oldPrice" x-text="'Rs. ' + activeProduct.oldPrice"></span>
                        </div>

                        <div class="mb-8">
                            <label class="block text-sm font-bold text-gray-900 mb-3">Quantity</label>
                            <div class="flex items-center border border-gray-300 rounded-lg w-fit bg-white">
                                <button type="button" @click="if(quantity > 1) quantity--" class="px-4 py-2 hover:bg-gray-100 text-gray-600 font-bold text-lg rounded-l-lg select-none">-</button>
                                <input type="text" x-model="quantity" class="w-16 text-center border-none py-2 focus:ring-0 font-bold text-gray-900" readonly>
                                <button type="button" @click="quantity++" class="px-4 py-2 hover:bg-gray-100 text-gray-600 font-bold text-lg rounded-r-lg select-none">+</button>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('cart.add') }}" class="flex gap-4 mt-auto w-full">
                            @csrf
                            <input type="hidden" name="product_id" :value="activeProduct.id">
                            <input type="hidden" name="quantity" :value="quantity">

                            <button type="submit" name="action" value="add_cart" class="flex-1 bg-white border-2 border-primary text-primary font-bold py-3 md:py-4 rounded-xl hover:bg-red-50 transition flex justify-center items-center gap-2">
                                <span class="material-symbols-outlined">shopping_cart</span> Add to Cart
                            </button>
                            
                            <button type="submit" name="action" value="buy_now" class="flex-1 bg-orange-600 text-white font-bold py-3 md:py-4 rounded-xl hover:bg-orange-700 transition shadow-lg shadow-orange-600/30">
                                Buy Now
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
@endsection