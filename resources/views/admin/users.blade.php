@extends('layouts.admin')

@section('admin_content')
<div class="max-w-[1200px] mx-auto space-y-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">User Details</h1>
            <p class="text-gray-500 text-sm mt-1">Manage and view registered user information.</p>
        </div>
        <button class="bg-[#A14000] text-white px-5 py-2.5 rounded-lg font-bold hover:bg-[#8B3600] transition shadow-sm flex items-center gap-2">
            <span class="material-symbols-outlined text-[20px]">add</span> Add User
        </button>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <!-- Toolbar -->
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
            <div class="relative w-80">
                <span class="material-symbols-outlined absolute left-3 top-2.5 text-gray-400 text-[20px]">search</span>
                <input type="text" placeholder="Search by name, email, or ID..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-[#ad292f] focus:border-[#ad292f] outline-none">
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2 text-sm text-gray-600">
                    Filter by Status: 
                    <select class="border-gray-300 rounded-lg text-sm focus:ring-[#ad292f] py-1.5 pl-3 pr-8 cursor-pointer">
                        <option>All Users</option>
                        <option>Active</option>
                        <option>Suspended</option>
                    </select>
                </div>
                <button class="flex items-center gap-2 px-4 py-1.5 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 transition">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span> More Filters
                </button>
            </div>
        </div>

        <!-- Table -->
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-bold text-[11px] uppercase tracking-wider">
                    <th class="p-4 w-24">User ID</th>
                    <th class="p-4">User Info</th>
                    <th class="p-4 w-32">Join Date</th>
                    <th class="p-4 w-32 text-center">Total Orders</th>
                    <th class="p-4 w-32 text-center">Status</th>
                    <th class="p-4 w-24 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                <!-- Example Row 1 -->
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="p-4 text-gray-500 font-mono text-xs">#U-8492</td>
                    <td class="p-4 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-red-100 text-red-700 flex items-center justify-center font-bold text-sm">JS</div>
                        <div>
                            <div class="font-bold text-gray-900">Yasith</div>
                            <div class="text-gray-500 text-xs">yasith@example.com</div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-600 text-xs">Oct 12, 2026</td>
                    <td class="p-4 text-center font-bold text-gray-700">24</td>
                    <td class="p-4 text-center">
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-green-100 text-green-700 uppercase">Active</span>
                    </td>
                    <td class="p-4 text-right text-gray-400">
                        <button class="hover:text-[#ad292f] transition"><span class="material-symbols-outlined text-[20px]">more_vert</span></button>
                    </td>
                </tr>
                <!-- Example Row 2 -->
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="p-4 text-gray-500 font-mono text-xs">#U-8494</td>
                    <td class="p-4 flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-orange-100 text-orange-700 flex items-center justify-center font-bold text-sm">EW</div>
                        <div>
                            <div class="font-bold text-gray-900">Emily Wong (Seller)</div>
                            <div class="text-gray-500 text-xs">emily.w99@mail.com</div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-600 text-xs">Nov 02, 2023</td>
                    <td class="p-4 text-center font-bold text-gray-700">12</td>
                    <td class="p-4 text-center">
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-red-100 text-red-700 uppercase">Suspended</span>
                    </td>
                    <td class="p-4 text-right text-gray-400">
                        <button class="hover:text-[#ad292f] transition"><span class="material-symbols-outlined text-[20px]">more_vert</span></button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Pagination -->
        <div class="p-4 border-t border-gray-100 bg-gray-50 flex justify-between items-center text-xs text-gray-500">
            <span>Showing 1 to 10 of 1,248 users</span>
            <div class="flex items-center gap-1">
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded hover:bg-gray-100"><span class="material-symbols-outlined text-[16px]">chevron_left</span></button>
                <button class="w-7 h-7 flex items-center justify-center bg-[#A14000] text-white rounded font-bold">1</button>
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded hover:bg-gray-100 font-bold text-gray-600">2</button>
                <button class="w-7 h-7 flex items-center justify-center border border-gray-200 rounded hover:bg-gray-100"><span class="material-symbols-outlined text-[16px]">chevron_right</span></button>
            </div>
        </div>
    </div>
</div>
@endsection