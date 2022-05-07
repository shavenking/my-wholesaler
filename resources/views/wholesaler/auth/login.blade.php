<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - My Wholesale</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex justify-center items-center h-screen bg-[#f5f5fb]">
    <div class="bg-white rounded-xl p-16">
        <h1 class="mb-10 text-center font-bold text-2xl">Wholesaler | Login</h1>

        <form action="{{ route('auth.login') }}" method="POST">
            @csrf

            <!-- Phone -->
            <div class="rounded w-full">
                <label for="phone" class="text-[#a3a3a3] font-bold">Phone Number</label>
                <input
                        id="phone"
                        type="text"
                        name="phone"
                        class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none"/>
            </div>

            <!-- Password -->
            <div class="rounded w-full mt-4">
                <label for="password" class="text-[#a3a3a3] font-bold">SMS Verification Code</label>
                <input
                        id="sms-verification-code"
                        type="password"
                        name="sms_verification_code"
                        class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none"/>
            </div>

            <button type="submit" class="mt-8 rounded bg-[#0076d0] text-white w-full py-2">Login</button>
        </form>
    </div>
</div>
</body>
</html>
