<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Friet bij Piet') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-pink-50">

<div class="min-h-screen bg-pink-50">
    <!-- Navigation Bar -->
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-pink-500 shadow-lg">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl text-white font-extrabold text-center">{{ $header }}</h1>
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main class="p-6 bg-white rounded-lg shadow-lg mx-4 sm:mx-auto mt-8">
        {{ $slot }}
    </main>

    <!-- Footer (Optional) -->
    <footer class="bg-pink-500 text-white py-4 mt-12">
        <div class="text-center">
            <p class="font-semibold">🍟 Friet bij Piet - De lekkerste snacks van de stad! 😋</p>
        </div>
    </footer>
</div>

<!-- Additional Scripts if needed -->
</body>
</html>
