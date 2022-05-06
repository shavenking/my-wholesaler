<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - My Wholesale</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles

    <style>
        * {
            /*outline: 1px solid red;*/
        }
    </style>
</head>
<body>
<div class="flex justify-center items-center h-screen bg-[#f5f5fb]">
    <div class="bg-white rounded-xl p-16">
        <h1 class="mb-10 text-center font-bold text-2xl">Wholesaler | Login</h1>

        <!-- Mobile -->
        <div class="rounded w-full">
            <label for="mobile" class="text-[#a3a3a3] font-bold">Mobile</label>
            <input
                    id="mobile"
                    type="text"
                    name="mobile"
                    class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none"/>
        </div>

        <!-- Password -->
        <div class="rounded w-full mt-4">
            <label for="password" class="text-[#a3a3a3] font-bold">Password</label>
            <input
                    id="password"
                    type="text"
                    name="password"
                    class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none"/>
        </div>

        <button type="submit" class="mt-8 rounded bg-[#0076d0] text-white w-full py-2">Login</button>
    </div>
</div>

@livewireScripts
</body>
</html>
