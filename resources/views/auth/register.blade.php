<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MiniShop - Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Hanken Grotesk', sans-serif; background-color: #f9f9fb; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 py-10">
    <div class="w-full max-w-[450px] bg-white border border-red-100 rounded-xl shadow-sm p-8">
        <div class="text-center mb-8">
            <span class="inline-block text-[#A12B2B] font-bold text-sm mb-1">MiniShop</span>
            <h1 class="text-2xl font-bold text-gray-900">Create an Account</h1>
            <p class="text-sm text-gray-500 mt-1">Join us to start shopping today.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm text-center font-medium">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-bold text-gray-800 mb-1" for="name">Full Name</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">person</span>
                    <input class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] focus:border-[#A14000] text-sm outline-none transition" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" required type="text"/>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-800 mb-1" for="email">Email Address</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">mail</span>
                    <input class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] focus:border-[#A14000] text-sm outline-none transition" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required type="email"/>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-800 mb-1" for="password">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">lock</span>
                    <input class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] focus:border-[#A14000] text-sm outline-none transition" id="password" name="password" placeholder="••••••••" required type="password"/>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-800 mb-1" for="password_confirmation">Confirm Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">history</span>
                    <input class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] focus:border-[#A14000] text-sm outline-none transition" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required type="password"/>
                </div>
            </div>

            <div class="flex items-start pt-2">
                <input class="h-4 w-4 mt-0.5 text-[#A14000] focus:ring-[#A14000] border-gray-300 rounded cursor-pointer" id="terms" required type="checkbox"/>
                <label class="ml-2 block text-xs text-gray-600" for="terms">
                    I agree to the <a href="#" class="text-[#A12B2B] hover:underline">Terms of Service</a> and <a href="#" class="text-[#A12B2B] hover:underline">Privacy Policy</a>.
                </label>
            </div>

            <button class="w-full bg-[#A14000] hover:bg-[#8B3600] text-white font-bold text-sm py-2.5 px-4 rounded-lg transition-colors mt-2" type="submit">
                Sign Up
            </button>
        </form>
        
        <div class="mt-8 text-center text-xs text-gray-600">
            Already have an account? <a class="text-[#A12B2B] font-bold hover:underline" href="{{ route('login') }}">Log in</a>
        </div>
    </div>
</body>
</html>