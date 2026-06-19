@extends('layouts.admin')

@section('admin_content')
<div class="p-8 space-y-6 max-w-6xl">
    <a href="{{ route('admin.sellers') }}" class="flex items-center gap-2 text-gray-500 hover:text-[#ad292f] transition w-fit font-semibold text-sm mb-2">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span> Back to Sellers
    </a>

    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Seller Details</h1>
            <p class="text-gray-500 text-sm mt-1">View seller profile and published products.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-8">
        <div class="flex flex-col md:flex-row items-start gap-8">
            <div class="w-28 h-28 bg-gray-100 border border-gray-200 rounded-full flex items-center justify-center text-[#ad292f] text-5xl font-bold shrink-0 shadow-sm">
                {{ strtoupper(substr($seller->name, 0, 1)) }}
            </div>

            <div class="flex-1 w-full">
                <div class="flex flex-col md:flex-row md:justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">{{ $seller->name }}</h2>
                        <p class="text-gray-500 text-sm mb-4 mt-1">
                            <span class="font-mono bg-gray-100 px-2 py-0.5 rounded text-gray-600">ID: #S-{{ str_pad($seller->id, 4, '0', STR_PAD_LEFT) }}</span>
                            <span class="mx-2">/</span>
                            Joined: {{ $seller->created_at->format('M d, Y') }}
                        </p>
                    </div>
                    <div class="flex gap-3">
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-green-100 text-green-700 flex items-center gap-1.5 border border-green-200 h-fit">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span> Active Seller
                        </span>
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-orange-50 text-[#a14000] border border-orange-100 h-fit">
                            {{ $seller->products_count }} Products
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6 mt-6 border-t border-gray-100 pt-6">
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1 flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">mail</span> Email Address</p>
                        <p class="font-semibold text-gray-800 text-[15px]">{{ $seller->email }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1 flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">call</span> Phone Number</p>
                        <p class="font-semibold text-gray-800 text-[15px]">{{ $seller->phone ?? 'Not Provided' }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1 flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">cake</span> Date of Birth</p>
                        <p class="font-semibold text-gray-800 text-[15px]">{{ $seller->dob ?? 'Not Provided' }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1 flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">markunread_mailbox</span> Postal Code</p>
                        <p class="font-semibold text-gray-800 text-[15px]">{{ $seller->postal_code ?? 'Not Provided' }}</p>
                    </div>
                    <div class="col-span-1 sm:col-span-2 bg-gray-50 p-4 rounded-lg border border-gray-100 mt-2">
                        <p class="text-xs text-gray-400 font-bold uppercase tracking-wider mb-1 flex items-center gap-1.5"><span class="material-symbols-outlined text-[16px]">home_pin</span> Registered Address</p>
                        <p class="font-semibold text-gray-800 text-[15px] leading-relaxed">{{ $seller->address ?? 'Not Provided' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-5 border-b border-gray-100">
            <h2 class="text-xl font-bold text-gray-900">Recent Products</h2>
        </div>
        <div class="divide-y divide-gray-100">
            @forelse($products as $product)
                <div class="p-5 flex items-center gap-4">
                    <div class="w-14 h-14 rounded-lg bg-gray-50 border border-gray-200 overflow-hidden shrink-0">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-bold text-gray-900 truncate">{{ $product->name }}</h3>
                        <p class="text-sm text-gray-500">{{ $product->category }}</p>
                    </div>
                    <div class="font-bold text-[#ad292f]">Rs. {{ number_format($product->price, 2) }}</div>
                </div>
            @empty
                <div class="p-8 text-center text-gray-500">This seller has not published products yet.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
