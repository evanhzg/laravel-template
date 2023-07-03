<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/variables.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
</head>
<body class="antialiased">
<div id="app">
    @yield('content')
</div>
</body>
</html>
