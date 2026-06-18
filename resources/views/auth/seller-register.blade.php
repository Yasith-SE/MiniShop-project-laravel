<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MiniShop - Seller Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Hanken Grotesk', sans-serif; background-color: #f9f9fb; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 py-10">
    <div class="w-full max-w-[600px] bg-white border border-orange-200 rounded-xl shadow-lg p-8 relative overflow-hidden">
        
        <!-- Top Orange Border -->
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-[#fe752a] to-[#A14000]"></div>

        <div class="text-center mb-8 mt-2">
            <span class="inline-block text-[#A14000] font-bold text-sm mb-1"><span class="material-symbols-outlined align-middle mr-1">storefront</span>Seller Portal</span>
            <h1 class="text-2xl font-bold text-gray-900">Become a Seller</h1>
            <p class="text-sm text-gray-500 mt-1">Open your store and start selling on MiniShop today.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm text-center font-medium bg-red-50 p-3 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <!-- Hidden field to identify seller -->
            <input type="hidden" name="is_seller" value="1">

            <!-- Full Name -->
            <div>
                <label class="block text-xs font-bold text-gray-800 mb-1" for="name">Full Name <span class="text-red-500">*</span></label>
                <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="name" name="name" value="{{ old('name') }}" placeholder="John Doe" required type="text"/>
            </div>

            <!-- DOB & Phone Grid -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-800 mb-1" for="dob">Date of Birth <span class="text-red-500">*</span></label>
                    <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none text-gray-600" id="dob" name="dob" value="{{ old('dob') }}" required type="date"/>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-800 mb-1" for="phone">Phone Number <span class="text-red-500">*</span></label>
                    <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+94 77 123 4567" required type="tel"/>
                </div>
            </div>

            <!-- Home Address -->
            <div>
                <label class="block text-xs font-bold text-gray-800 mb-1" for="address">Home Address <span class="text-red-500">*</span></label>
                <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="address" name="address" value="{{ old('address') }}" placeholder="123 Main Street, City" required type="text"/>
            </div>

            <!-- Postal Code & Email Grid -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-gray-800 mb-1" for="postal_code">Postal Code <span class="text-red-500">*</span></label>
                    <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" placeholder="00100" required type="text"/>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-800 mb-1" for="email">Email Address <span class="text-red-500">*</span></label>
                    <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="email" name="email" value="{{ old('email') }}" placeholder="store@example.com" required type="email"/>
                </div>
            </div>

            <!-- Passwords Grid -->
            <div class="grid grid-cols-2 gap-4 pt-2">
                <div>
                    <label class="block text-xs font-bold text-gray-800 mb-1" for="password">Password <span class="text-red-500">*</span></label>
                    <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="password" name="password" placeholder="••••••••" required type="password"/>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-800 mb-1" for="password_confirmation">Confirm Password <span class="text-red-500">*</span></label>
                    <input class="w-full px-3 py-2.5 border border-gray-300 rounded-lg focus:ring-1 focus:ring-[#A14000] text-sm outline-none" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required type="password"/>
                </div>
            </div>

            <div class="flex items-start pt-4">
                <input class="h-4 w-4 mt-0.5 text-[#A14000] focus:ring-[#A14000] border-gray-300 rounded cursor-pointer" id="terms" required type="checkbox"/>
                <label class="ml-2 block text-xs text-gray-600" for="terms">
                    I agree to the <a href="#" class="text-[#fe752a] hover:underline">Seller Agreement</a> and <a href="#" class="text-[#fe752a] hover:underline">Privacy Policy</a>.
                </label>
            </div>

            <button class="w-full bg-[#A14000] hover:bg-[#8B3600] text-white font-bold text-sm py-3 px-4 rounded-lg transition-colors mt-4 shadow-sm" type="submit">
                Register as Seller
            </button>
        </form>
        
        <div class="mt-8 text-center text-xs text-gray-600">
            Already have a seller account? <a class="text-[#A14000] font-bold hover:underline" href="{{ route('login') }}">Log in here</a>
        </div>
        <div class="mt-2 text-center text-xs text-gray-500">
            Want to register as a customer instead? <a class="text-[#ad292f] font-bold hover:underline" href="{{ route('register') }}">Click here</a>
        </div>
    </div>
</body>
</html>