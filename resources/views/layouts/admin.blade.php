<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MiniShop Super Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#ad292f",
                        secondary: "#a14000",
                        background: "#f9f9fb",
                        surface: "#ffffff",
                        "on-surface": "#1a1c1d",
                        "outline-variant": "#e1bfbc"
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#f9f9fb] text-on-surface font-sans min-h-screen flex">
    <aside class="fixed left-0 top-0 h-screen w-64 flex flex-col py-6 bg-white border-r border-gray-200 z-40">
        <div class="px-6 mb-8">
            <div class="font-bold text-primary text-xl">MiniShop Admin</div>
            <div class="text-sm text-gray-500 mt-2 font-bold">{{ Auth::user()->name }}</div>
        </div>

        <nav class="flex-1 px-4">
            <ul class="flex flex-col gap-2">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'text-primary bg-red-50 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors' }}">
                        <span class="material-symbols-outlined">dashboard</span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.products') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->routeIs('admin.products') ? 'text-primary bg-red-50 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors' }}">
                        <span class="material-symbols-outlined">inventory_2</span> Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.sellers') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->routeIs('admin.sellers*') ? 'text-primary bg-red-50 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors' }}">
                        <span class="material-symbols-outlined">storefront</span> Sellers
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.customers') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->routeIs('admin.customers') ? 'text-primary bg-red-50 font-bold' : 'text-gray-600 hover:bg-gray-50 hover:text-primary font-medium transition-colors' }}">
                        <span class="material-symbols-outlined">group</span> Customers
                    </a>
                </li>
            </ul>
        </nav>

        <div class="px-6 mt-auto space-y-3">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-gray-600 hover:text-primary">
                <span class="material-symbols-outlined">store</span> Storefront
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 text-gray-600 hover:text-primary w-full">
                    <span class="material-symbols-outlined">logout</span> Log Out
                </button>
            </form>
        </div>
    </aside>

    <main class="ml-64 flex-1 p-8">
        @yield('admin_content')
    </main>
</body>
</html>
