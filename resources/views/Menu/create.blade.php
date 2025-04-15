<div class="flex justify-center mt-10 mb-12">
    <a href="{{ route('menu.index') }}">
        <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
            terug
        </button>
    </a>
</div>


<form action="{{ route('menu.store') }}" method="POST" class="max-w-md mx-auto mt-10 p-6  rounded-2xl shadow-xl border-4 border-dotted border-pink-400">
    @vite('resources/css/app.css')
    @csrf
    @method('post')



    <script src="https://cdn.tailwindcss.com"></script>

    <h2 class="text-3xl font-extrabold text-pink-600 mb-6 text-center">🍟 Friet bij Piet - Voeg een snack toe! 😋</h2>

    <label for="name" class="block text-lg font-semibold text-pink-700 mb-2">Snack naam</label>
    <input name="name" type="text" placeholder="Bijv. Kaassoufflé"
           class="w-full px-4 py-2 mb-4 border border-yellow-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 shadow-inner">

    <label for="price" class="block text-lg font-semibold text-pink-700 mb-2">Prijs (€)</label>
    <input type="number" name="price" step="0.01" placeholder="Bijv. 2.50"
           class="w-full px-4 py-2 mb-6 border border-yellow-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 shadow-inner">

    <input type="submit" value="🧾 Toevoegen aan menu"
           class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-2xl cursor-pointer">
</form>
