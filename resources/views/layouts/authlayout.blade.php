<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | SISATU</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/costumAuth.js') }}"></script>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/costumAuth.css') }}">
</head>
<body>
    <div class="bg-white">
        <main class="mt-5">
           {{ $slot }}
        </main>
    </div>

     <script src="{{ asset('js/costumAuth.js') }}"></script>
</body>
</html>
