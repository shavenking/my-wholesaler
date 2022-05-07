<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard - My Wholesale</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
Hi! {{ $name }} you are now logged in 👍
<form action="{{ route('auth.logout') }}" method="POST">
    @csrf

    <button type="submit">Logout</button>
</form>
</body>
</html>
