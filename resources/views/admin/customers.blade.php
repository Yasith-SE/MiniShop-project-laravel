@extends('layouts.admin')

@section('admin_content')
<div class="p-8 space-y-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Registered Customers</h1>
            <p class="text-gray-500 text-sm mt-1">View customer accounts registered on MiniShop.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-bold text-xs uppercase tracking-wider">
                        <th class="p-4">Customer</th>
                        <th class="p-4">Contact</th>
                        <th class="p-4 text-center">Joined Date</th>
                        <th class="p-4 text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                    @forelse($customers as $customer)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-red-50 text-[#ad292f] flex items-center justify-center font-bold">
                                    {{ strtoupper(substr($customer->name, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="font-bold text-gray-900">{{ $customer->name }}</div>
                                    <div class="text-gray-500 text-xs">ID: #C-{{ str_pad($customer->id, 4, '0', STR_PAD_LEFT) }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">
                            <div class="text-gray-800">{{ $customer->email }}</div>
                            <div class="text-gray-500 text-xs">{{ $customer->phone ?? 'No phone number' }}</div>
                        </td>
                        <td class="p-4 text-center text-gray-500">
                            {{ $customer->created_at->format('M d, Y') }}
                        </td>
                        <td class="p-4 text-center">
                            <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700">Active</span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="p-8 text-center text-gray-500">No customers registered yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t border-gray-100 bg-gray-50">
            {{ $customers->links() }}
        </div>
    </div>
</div>
@endsection
