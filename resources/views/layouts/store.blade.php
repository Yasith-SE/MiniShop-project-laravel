<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MiniShop</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Alpine.js (Dropdowns saha Modals weda karanna meka oone) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <style>
        body { font-family: 'Hanken Grotesk', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#ad292f",
                        "secondary": "#fe752a",
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
<body class="bg-background text-on-surface flex flex-col min-h-screen">

    <!-- Top Red Navbar -->
    <header class="bg-primary text-white w-full shadow-sm">
        <div class="max-w-[1280px] mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between h-20 gap-8">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 shrink-0 hover:opacity-90 transition-opacity">
                    <span class="material-symbols-outlined text-[32px]">storefront</span>
                    <span class="text-[24px] font-bold tracking-tight">MiniShop</span>
                </a>

                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl hidden md:block">
                    <div class="relative w-full">
                        <input class="w-full bg-white text-gray-900 rounded-full pl-5 pr-12 py-2.5 focus:outline-none focus:ring-2 focus:ring-secondary text-sm" placeholder="Search in MiniShop..." type="text"/>
                        <button class="absolute right-1 top-1 bottom-1 px-4 text-gray-500 hover:text-primary transition-colors flex items-center justify-center bg-gray-100 rounded-full">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                        </button>
                    </div>
                </div>

                <!-- Right Side Icons -->
                <div class="flex items-center gap-6 shrink-0">
                    <!-- Cart -->
                    <a href="#" class="flex flex-col items-center hover:opacity-90 transition-all relative">
                        <span class="material-symbols-outlined text-[28px]">shopping_cart</span>
                        <span class="font-label-md text-[14px] mt-1 hidden md:block">Cart</span>
                        <span class="absolute -top-1 -right-2 bg-secondary text-white text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center border-2 border-primary">2</span>
                    </a>

                    <!-- User Profile & Auth -->
                    @auth
                        <!-- Alpine Dropdown System -->
                        <div x-data="{ open: false }" class="relative">
                            
                            <!-- Profile Click Button -->
                            <button @click="open = !open" @click.away="open = false" class="flex flex-col items-center hover:opacity-90 transition-all focus:outline-none">
                                <span class="material-symbols-outlined text-[28px]">account_circle</span>
                                <span class="font-label-md text-[14px] mt-1 hidden md:block">{{ explode(' ', Auth::user()->name)[0] }}</span>
                            </button>

                            <!-- The Dropdown Menu -->
                            <div x-show="open" style="display: none;" x-transition class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-xl py-2 z-50 border border-gray-100 text-gray-800">
                                <div class="px-4 py-3 border-b border-gray-100 mb-1">
                                    <p class="text-xs text-gray-500">Signed in as</p>
                                    <p class="text-sm font-bold truncate">{{ Auth::user()->email }}</p>
                                </div>
                                
                                <a href="{{ route('profile.edit') }}" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 flex items-center gap-3 transition font-medium">
                                    <span class="material-symbols-outlined text-[20px] text-gray-400">person</span> My Profile
                                </a>
                                
                                <a href="{{ url('/dashboard') }}" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 flex items-center gap-3 transition font-medium">
                                    <span class="material-symbols-outlined text-[20px] text-gray-400">dashboard</span> My Dashboard
                                </a>
                                
                                <hr class="my-1 border-gray-100">
                                
                                <!-- Logout -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2.5 text-sm text-[#ad292f] hover:bg-red-50 flex items-center gap-3 transition font-bold">
                                        <span class="material-symbols-outlined text-[20px]">logout</span> Log Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <!-- Login/Register links for guests -->
                        <a href="{{ route('login') }}" class="flex flex-col items-center hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined text-[28px]">login</span>
                            <span class="font-label-md text-[14px] mt-1 hidden md:block">Login</span>
                        </a>
                        <a href="{{ route('register') }}" class="flex flex-col items-center hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined text-[28px]">person_add</span>
                            <span class="font-label-md text-[14px] mt-1 hidden md:block">Sign Up</span>
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Categories Bar -->
            <nav class="flex items-center gap-8 pb-3 overflow-x-auto hide-scrollbar text-[14px] font-medium text-white/90">
                <a class="text-white font-bold border-b-2 border-white pb-1" href="/">Home</a>
                <a class="hover:text-white pb-1" href="#">Electronics</a>
                <a class="hover:text-white pb-1" href="#">Fashion</a>
                <a class="hover:text-white pb-1" href="#">Beauty</a>
                <a class="hover:text-white pb-1" href="#">Toys</a>
            </nav>
        </div>
    </header>

    <!-- Main Dynamic Content (This is where welcome.blade.php loads!) -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#e5e5e5] border-t border-gray-300 mt-12 py-8">
        <div class="max-w-[1280px] mx-auto px-4 md:px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
                <h3 class="text-primary font-bold text-xl mb-1">MiniShop</h3>
                <p class="text-gray-500 text-xs">© 2026 MiniShop E-commerce. All rights reserved.</p>
            </div>
            <div class="flex flex-wrap gap-3 text-xs font-bold text-gray-700">
                <a href="#" class="hover:text-primary transition-colors border border-gray-400 px-3 py-1.5 rounded bg-white">Help & Support</a>
                <a href="#" class="hover:text-primary transition-colors border border-gray-400 px-3 py-1.5 rounded bg-white">Become a Seller</a>
                <a href="#" class="hover:text-primary transition-colors border border-gray-400 px-3 py-1.5 rounded bg-white">About Us</a>
                <a href="#" class="hover:text-primary transition-colors border border-gray-400 px-3 py-1.5 rounded bg-white">Privacy Policy</a>
            </div>
        </div>
    </footer>

</body>
</html>