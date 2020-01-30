<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business App</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    @yield('login')
    @yield('profile')
    @yield('resetpwd')
    @yield('register')
    @yield('welcome')
</body>
</html>
