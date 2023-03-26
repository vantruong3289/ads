<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ads daily">
    @yield('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css" media="screen">
    @livewireStyles
    @vite('resources/css/app.css')
    @laravelPWA
</head>

<body class="font-ads @yield('body-class')">
    <x-alert />
    @yield('content')
    @livewireScripts
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
