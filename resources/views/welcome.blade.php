<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Friet bij Piet 🍟</title>

    {{-- Snelle Tailwind check via CDN (voor demo / testen) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-200 via-pink-100 to-yellow-100 min-h-screen flex items-center justify-center">

<div class="text-center p-10 rounded-3xl shadow-2xl bg-white bg-opacity-80 backdrop-blur-md max-w-xl">
    <h1 class="text-6xl font-extrabold text-pink-600 drop-shadow-md mb-6 animate-bounce">
        🍟 Friet bij Piet
    </h1>

    <p class="text-xl text-gray-700 font-medium mb-8">
        Welkom bij de enige echte snack-tempel van Nederland! 🤤
    </p>

    <a href="{{ route('menu.index') }}">
        <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
            👉 Bekijk het Menu
        </button>
    </a>
</div>

</body>
</html>
