<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name', 'MiniShop') }}</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#ffdad7",
                        "surface-container-low": "#f3f3f5",
                        "tertiary": "#5c5c5c",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-background": "#1a1c1d",
                        "secondary": "#a14000",
                        "primary-container": "#cf4244",
                        "surface-variant": "#e2e2e4",
                        "on-surface": "#1a1c1d",
                        "primary": "#ad292f",
                        "surface": "#f9f9fb",
                        "outline-variant": "#e1bfbc",
                    },
                    fontFamily: {
                        "headline-xl": ["Hanken Grotesk"],
                        "headline-lg": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "body-lg": ["Hanken Grotesk"],
                        "body-md": ["Hanken Grotesk"],
                        "body-sm": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "price-lg": ["Hanken Grotesk"]
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #f4f4f6; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24 }
        .material-symbols-outlined[data-weight="fill"] { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="font-body-md text-on-surface antialiased bg-surface">

    <header class="bg-primary text-on-primary sticky top-0 z-50 flat no shadows w-full">
        <div class="flex flex-col w-full max-w-[1280px] mx-auto px-6 py-4">
            <div class="flex items-center justify-between gap-8">
                <a href="/" class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[40px]" data-icon="storefront">storefront</span>
                    <span class="text-[32px] font-bold text-on-primary">MiniShop</span>
                </a>
                
                <div class="flex-grow max-w-2xl relative hidden md:block">
                    <input class="w-full h-12 pl-4 pr-12 rounded-full text-on-surface font-body-md border border-outline-variant focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-surface-container-lowest" placeholder="Search in MiniShop" type="text"/>
                    <button class="absolute right-3 top-1/2 -translate-y-1/2 text-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined" data-icon="search">search</span>
                    </button>
                </div>
                
                <div class="flex items-center gap-6">
                    <a href="#" class="flex flex-col items-center hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                        <span class="font-label-md text-[14px] mt-1 hidden md:block">Cart</span>
                    </a>
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="flex flex-col items-center hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
                            <span class="font-label-md text-[14px] mt-1 hidden md:block">{{ Auth::user()->name }}</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="flex flex-col items-center hover:opacity-90 transition-all">
                            <span class="material-symbols-outlined" data-icon="login">login</span>
                            <span class="font-label-md text-[14px] mt-1 hidden md:block">Login</span>
                        </a>
                    @endauth
                </div>
            </div>
            
            <nav class="hidden md:flex items-center gap-8 mt-4">
                <a class="text-on-primary font-bold border-b-2 border-on-primary pb-1 text-[14px] hover:bg-primary-container/20 px-2" href="/">Home</a>
                <a class="text-on-primary/80 font-medium hover:text-on-primary text-[14px] hover:bg-primary-container/20 px-2" href="#">Electronics</a>
                <a class="text-on-primary/80 font-medium hover:text-on-primary text-[14px] hover:bg-primary-container/20 px-2" href="#">Fashion</a>
                <a class="text-on-primary/80 font-medium hover:text-on-primary text-[14px] hover:bg-primary-container/20 px-2" href="#">Beauty</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-surface-variant border-t border-outline-variant flat no shadows mt-12">
        <div class="w-full py-8 px-6 max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6 text-on-surface">
            <div class="flex flex-col items-center md:items-start gap-2">
                <span class="text-[20px] font-bold text-primary">MiniShop</span>
                <p class="text-[14px] text-tertiary">© 2026 MiniShop E-commerce. All rights reserved.</p>
            </div>
            <nav class="flex flex-wrap justify-center gap-6">
                <a class="text-tertiary hover:text-primary text-[14px] hover:underline" href="#">Help & Support</a>
                <a class="text-tertiary hover:text-primary text-[14px] hover:underline" href="#">Become a Seller</a>
                <a class="text-tertiary hover:text-primary text-[14px] hover:underline" href="#">Privacy Policy</a>
            </nav>
        </div>
    </footer>

</body>
</html>