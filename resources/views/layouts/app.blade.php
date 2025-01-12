<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Meu Sistema')</title>

    <!-- Tabler CSS -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tabler/dist/css/demo.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<div class="page">
    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-xl">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('components.footer')
    </div>
</div>

<!-- Tabler JS -->
<script src="{{ asset('tabler/dist/js/tabler.min.js') }}"></script>
</body>
</html>
