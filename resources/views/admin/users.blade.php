@extends('layouts.admin')

@section('admin_content')
<div class="max-w-[1280px] mx-auto space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">User Details</h1>
            <p class="text-gray-500 text-sm mt-1">Manage and view registered user information.</p>
        </div>
        <button class="bg-secondary text-white px-6 py-2.5 rounded-lg font-bold shadow-sm">+ Add User</button>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
            <div class="relative w-96">
                <span class="material-symbols-outlined absolute left-3 top-2.5 text-gray-400">search</span>
                <input type="text" placeholder="Search by name, email, or ID..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:ring-primary focus:border-primary">
            </div>
        </div>
        
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200 text-gray-500 font-semibold text-xs uppercase tracking-wider">
                    <th class="p-4">User ID</th>
                    <th class="p-4">User Info</th>
                    <th class="p-4">Join Date</th>
                    <th class="p-4 text-center">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm text-gray-800">
                @foreach($users as $user)
                <tr class="hover:bg-gray-50/50 transition-colors group">
                    <td class="p-4 font-mono text-gray-500">#U-{{ $user->id * 1000 }}</td>
                    <td class="p-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                                {{ substr($user->name, 0, 2) }}
                            </div>
                            <div>
                                <div class="font-bold text-gray-900">{{ $user->name }}</div>
                                <div class="text-gray-500 text-xs">{{ $user->email }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-500">{{ $user->created_at->format('M d, Y') }}</td>
                    <td class="p-4 text-center">
                        <span class="px-2.5 py-1 rounded-full text-xs font-bold bg-green-100 text-green-800 uppercase tracking-wider">{{ $user->role }}</span>
                    </td>
                    <td class="p-4 text-right opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 text-gray-400 hover:text-primary rounded"><span class="material-symbols-outlined text-[20px]">edit</span></button>
                        <button class="p-1.5 text-gray-400 hover:text-primary rounded"><span class="material-symbols-outlined text-[20px]">visibility</span></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4 border-t border-gray-100 bg-gray-50">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection