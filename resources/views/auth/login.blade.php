<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MiniShop - Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Hanken Grotesk', sans-serif; background-color: #f9f9fb; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-[400px] bg-white rounded-xl shadow-sm border border-gray-200 relative overflow-hidden">
        <!-- Top Red/Orange Border Line -->
        <div class="h-1.5 w-full bg-gradient-to-r from-[#8B2020] to-[#A14000]"></div>
        
        <div class="p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-[#A12B2B] mb-2">MiniShop</h1>
                <p class="text-gray-500 text-sm">Welcome back. Please sign in to continue.</p>
            </div>

            @if ($errors->any())
                <div class="mb-4 text-red-600 text-sm text-center font-medium">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                
                <div class="space-y-1.5">
                    <label class="block font-bold text-xs text-gray-800" for="email">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <input class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] focus:border-[#A14000] text-sm outline-none transition" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required type="email"/>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <div class="flex justify-between items-center">
                        <label class="block font-bold text-xs text-gray-800" for="password">Password</label>
                        <a href="{{ route('password.request') }}" class="text-xs font-bold text-[#A12B2B] hover:underline">Forgot Password?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-500">
                            <span class="material-symbols-outlined">lock</span>
                        </div>
                        <input class="block w-full pl-10 pr-10 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] focus:border-[#A14000] text-sm outline-none transition" id="password" name="password" placeholder="••••••••" required type="password"/>
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-gray-500 hover:text-gray-700">
                            <span class="material-symbols-outlined">visibility_off</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <input class="h-4 w-4 text-[#A14000] focus:ring-[#A14000] border-gray-300 rounded cursor-pointer" id="remember_me" name="remember" type="checkbox"/>
                    <label class="ml-2 block text-sm text-gray-600 cursor-pointer" for="remember_me">Remember me</label>
                </div>

                <button class="w-full py-2.5 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-[#A14000] hover:bg-[#8B3600] transition-colors" type="submit">
                    Sign In
                </button>
            </form>

            <!-- Social Login Divider -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500 text-xs">Or continue with</span>
                    </div>
                </div>
                
                <div class="mt-6 grid grid-cols-2 gap-3">
                    <button type="button" class="w-full flex justify-center items-center py-2 px-4 border border-gray-300 rounded-full bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-4 h-4 mr-2" alt="Google"> Google
                    </button>
                    <button type="button" class="w-full flex justify-center items-center py-2 px-4 border border-gray-300 rounded-full bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
                        <img src="https://www.svgrepo.com/show/511330/apple-173.svg" class="w-4 h-4 mr-2" alt="Apple"> Apple
                    </button>
                </div>
            </div>

            <p class="mt-8 text-center text-xs text-gray-600">
                Don't have an account? <a class="font-bold text-[#A12B2B] hover:underline" href="{{ route('register') }}">Sign up</a>
            </p>
        </div>
    </div>
</body>
</html>