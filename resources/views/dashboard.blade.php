{{-- resources/views/dashboard.blade.php --}}
    <!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 min-h-screen flex flex-col items-center justify-start py-12">

<h1 class="text-5xl font-extrabold text-center text-yellow-600 my-10">🎉 Je bent ingelogd!</h1>

<!-- Knop naar de welcome pagina -->
<div class="flex justify-center mt-10 mb-12">
    <a href="{{ route('welcome') }}">
        <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
            Terug naar de homepage 🏠
        </button>
    </a>
</div>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
        Uitloggen 🚪
    </button>
</form>


</body>
</html>
