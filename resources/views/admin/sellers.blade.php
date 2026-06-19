@extends('layouts.admin')

@section('admin_content')
<div class="p-8 space-y-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Registered Sellers</h1>
            <p class="text-gray-500 text-sm mt-1">Manage all seller accounts in the MiniShop platform.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[900px]">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-bold text-xs uppercase tracking-wider">
                        <th class="p-4">Seller Details</th>
                        <th class="p-4">Contact Info</th>
                        <th class="p-4 text-center">Products</th>
                        <th class="p-4 text-center">Joined Date</th>
                        <th class="p-4 text-center">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                    @forelse($sellers as $seller)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="font-bold text-gray-900">{{ $seller->name }}</div>
                            <div class="text-gray-500 text-xs">ID: #S-{{ str_pad($seller->id, 4, '0', STR_PAD_LEFT) }}</div>
                        </td>
                        <td class="p-4">
                            <div class="text-gray-800">{{ $seller->email }}</div>
                            <div class="text-gray-500 text-xs">{{ $seller->phone ?? 'N/A' }}</div>
                        </td>
                        <td class="p-4 text-center font-bold text-gray-900">
                            {{ $seller->products_count }}
                        </td>
                        <td class="p-4 text-center text-gray-500">
                            {{ $seller->created_at->format('M d, Y') }}
                        </td>
                        <td class="p-4 text-center">
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700">Active</span>
                        </td>
                        <td class="p-4 text-right">
                            <a href="{{ route('admin.sellers.show', $seller->id) }}" class="text-[#ad292f] hover:text-red-800 font-bold text-sm bg-red-50 hover:bg-red-100 px-4 py-2 rounded-lg transition-colors inline-block">
                                View Details
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-gray-500">No sellers registered yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50">
            {{ $sellers->links() }}
        </div>
    </div>
</div>
@endsection
