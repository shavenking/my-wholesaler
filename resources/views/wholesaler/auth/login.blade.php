<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - My Wholesale</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>
<div class="flex justify-center items-center h-screen bg-[#f5f5fb]">
    <div class="bg-white rounded-xl p-16">
        <h1 class="mb-10 text-center font-bold text-2xl">Wholesaler | Login</h1>

        <livewire:login-form></livewire:login-form>
    </div>
</div>

@livewireScripts
</body>
</html>
