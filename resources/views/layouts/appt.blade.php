<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <x-styles-head></x-styles-head>

</head>

<body class="g-sidenav-show bg-gray-200 font-sans antialiased">
    <x-bannert></x-bannert>

    <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <x-core-js></x-core-js>

    @stack('modals')

    <x-data-table></x-data-table>

    <x-select2></x-select2>

    @livewireScripts
</body>

</html>
