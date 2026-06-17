@extends('layouts.store')

@section('content')
<div class="max-w-[1280px] mx-auto px-4 md:px-6 py-8 flex flex-col md:flex-row gap-8">
    
    <aside class="hidden md:flex flex-col w-64 bg-surface rounded-xl shadow-sm border border-outline-variant shrink-0 h-fit sticky top-32">
        <nav class="flex flex-col py-4">
            <a class="flex items-center gap-3 px-6 py-3 bg-primary-fixed text-primary font-bold hover:bg-surface-variant mx-2 rounded-lg" href="#">
                <span class="material-symbols-outlined">bolt</span> Flash Sale
            </a>
            <a class="flex items-center gap-3 px-6 py-3 text-tertiary hover:bg-surface-variant font-medium mx-2 rounded-lg mt-1" href="#">
                <span class="material-symbols-outlined">language</span> Global Collection
            </a>
            <a class="flex items-center gap-3 px-6 py-3 text-tertiary hover:bg-surface-variant font-medium mx-2 rounded-lg mt-1" href="#">
                <span class="material-symbols-outlined">local_shipping</span> Free Shipping
            </a>
        </nav>
    </aside>

    <div class="flex-1 flex flex-col gap-8 w-full min-w-0">
        
        <section class="relative w-full rounded-xl overflow-hidden aspect-[21/9] md:aspect-[3/1] bg-surface-variant shadow-sm group">
            <img alt="Promo Banner" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkcDukGnmVYF81dcpClGmLb5raMnrPmOSCBLHRHi5ibZESmS-hlvmw0yPJlX0Vlbf7Z8GPvcG1dA5_wcWYn_xCk24SSKo5NNEZhR3rUm2rPQ0iOEs6thFQqZhD34GiLwvNiI1haMFATfLGGO6s66W-TAXxKjy1Fn7zpvFUQ0wpkQ9FGRgMJnqTYutlOOiqVQ8ohLmERA4Zr_pLppAPRkT9Ht3wfqWywszAFuT-9cSoH13TqPP-x2iNYDD2z5vwvtU47cj-3CKbiD4"/>
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-transparent flex flex-col justify-center px-8 md:px-16">
                <span class="text-primary-fixed text-[14px] uppercase tracking-wider mb-2">Limited Time Offer</span>
                <h1 class="text-white text-[40px] font-bold mb-4 max-w-md">Mega Flash Sale Weekend</h1>
                <p class="text-white/90 text-[18px] mb-6 max-w-md hidden md:block">Get up to 70% off on top electronics, fashion, and home goods.</p>
                <button class="bg-secondary text-white text-[14px] px-8 py-3 rounded w-fit hover:opacity-90 transition-colors shadow-sm">Shop Now</button>
            </div>
        </section>

        <section>
            <h2 class="text-[24px] font-bold text-on-surface mb-4">Top Categories</h2>
            <div class="grid grid-cols-3 md:grid-cols-6 gap-4">
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-outline-variant hover:shadow-md transition-shadow" href="#">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">smartphone</span>
                    </div>
                    <span class="text-[14px] text-center">Phones</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-outline-variant hover:shadow-md transition-shadow" href="#">
                    <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined">checkroom</span>
                    </div>
                    <span class="text-[14px] text-center">Apparel</span>
                </a>
                <a class="flex flex-col items-center gap-2 p-4 bg-white rounded-lg border border-outline-variant hover:shadow-md transition-shadow" href="#">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">sports_esports</span>
                    </div>
                    <span class="text-[14px] text-center">Gaming</span>
                </a>
            </div>
        </section>

        <section>
            <div class="flex items-center justify-between mb-4 border-b border-outline-variant pb-2">
                <div class="flex items-center gap-2 text-primary">
                    <span class="material-symbols-outlined text-[24px]">bolt</span>
                    <h2 class="text-[24px] font-bold text-on-surface">On Sale Now</h2>
                </div>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                
                <div class="bg-white border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:shadow-lg transition-all duration-300 relative">
                    <div class="absolute top-2 left-2 bg-primary text-white text-xs font-bold px-2 py-1 rounded-sm z-10">-40%</div>
                    <div class="aspect-square bg-gray-50 overflow-hidden">
                        <img alt="Headphones" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-500 p-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDY0frOEIhqyMqOncOneUewmzzoQfiCe97FLJRihAhQ_ecpPHrKIWJS-SJ3B2Bm9UsYtT2s0vQWjAyk5qal7ZNL9bjDKxokWDw90lu2XiDqA7nw1L_nsn8fi47tPQ__PfzQlCYMC_fABzesFquA0EVhqwYqEln81gs5Sr4ecCTPHegWBAPPVBZq9FtR02jNpAJJhmy0FVLTPuexIf_CMiR4BOWP7F3UZS7nw_IrEOmYq0jUJkSY_5T44D6LQmuT4lOjytPXcmsnyvU"/>
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-[14px] text-on-surface line-clamp-2 mb-2 group-hover:text-primary transition-colors">Premium Wireless ANC Headphones Model X</h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1">
                                <span class="text-[24px] font-bold text-secondary">$129.00</span>
                                <span class="text-sm text-tertiary line-through">$215.00</span>
                            </div>
                            <button class="w-full py-2 mt-3 bg-white border border-primary text-primary text-[14px] font-bold rounded hover:bg-primary hover:text-white transition-colors">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-outline-variant rounded-lg overflow-hidden flex flex-col group hover:shadow-lg transition-all duration-300 relative">
                    <div class="absolute top-2 left-2 bg-primary text-white text-xs font-bold px-2 py-1 rounded-sm z-10">-25%</div>
                    <div class="aspect-square bg-gray-50 overflow-hidden">
                        <img alt="Watch" class="w-full h-full object-cover mix-blend-multiply group-hover:scale-105 transition-transform duration-500 p-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUaPRqXfOaHqmSjUaMjTJ0g0J9G1juZNR4yHq_ovAhwK6yDsI64XaxnKXJea0AuJGHLeWjgC_DPSWublR1oDEnSpmMEmgWBcLLNHgRA7zSpesCd_PVjiCr3WWRg7ds5Kb2O75D8lvJzzQmv_kZfXHvWyWgy85jfDoPdEl5QhxwxW-kkjz3-s6n7h4ejYv3RmIIlCeFbRW5UJOOAZnMn1vqnsSDg9YqRK0Gft2hzeGQeuPuvB3q7V-HxUN2O57p_lFUNHa4M05L4o4"/>
                    </div>
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-[14px] text-on-surface line-clamp-2 mb-2 group-hover:text-primary transition-colors">Minimalist Smart Watch Series 5</h3>
                        <div class="mt-auto">
                            <div class="flex items-baseline gap-2 mb-1">
                                <span class="text-[24px] font-bold text-secondary">$89.99</span>
                                <span class="text-sm text-tertiary line-through">$119.99</span>
                            </div>
                            <button class="w-full py-2 mt-3 bg-white border border-primary text-primary text-[14px] font-bold rounded hover:bg-primary hover:text-white transition-colors">Add to Cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection