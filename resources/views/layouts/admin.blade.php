<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MiniShop Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#ad292f",
                        "secondary": "#a14000",
                        "background": "#f9f9fb",
                        "surface": "#ffffff",
                        "on-surface": "#1a1c1d",
                        "outline-variant": "#e1bfbc"
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#f9f9fb] text-on-surface font-body-md min-h-screen flex flex-col md:flex-row">

    <header class="hidden md:flex justify-between items-center w-full px-6 h-16 fixed top-0 z-50 bg-primary text-white flat no shadows">
        <div class="flex items-center gap-4">
            <span class="font-bold text-xl">MiniShop Admin</span>
        </div>
        <div class="flex items-center gap-4">
            <span class="material-symbols-outlined">account_circle</span>
            <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
        </div>
    </header>

    <nav class="hidden md:flex fixed left-0 top-16 h-[calc(100vh-64px)] w-64 flex-col py-6 bg-white border-r border-gray-200 z-40">
        <div class="px-6 pb-6 border-b mb-4 text-center">
            <span class="font-bold text-primary text-lg block">System Admin</span>
        </div>
        <ul class="flex flex-col gap-2 px-4 flex-1">
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100" href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined">dashboard</span> Dashboard
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100" href="{{ route('admin.products') }}">
                    <span class="material-symbols-outlined">inventory_2</span> Products
                </a>
            </li>
            <li>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-100" href="{{ route('admin.users') }}">
                    <span class="material-symbols-outlined">group</span> Customers
                </a>
            </li>
        </ul>
    </nav>

    <main class="flex-1 w-full md:ml-64 mt-16 p-6">
        @yield('admin_content')
    </main>

</body>
</html>