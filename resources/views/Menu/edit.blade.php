<h1 class="text-3xl font-bold text-center text-yellow-600 my-6">✏️ Bewerken - Friet bij Piet</h1>
<div class="flex justify-center mt-10 mb-12">
    <a href="{{ route('menu.index') }}">
        <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
            terug
        </button>
    </a>
</div>
<!-- Bewerken Formulier -->
<form action="{{ route('menu.update', $menu) }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
    @csrf
    @method('put')

    <script src="https://cdn.tailwindcss.com"></script>
    <div class="mb-4">
        <label for="name" class="block text-lg font-semibold text-gray-700">Naam</label>
        <input type="text" name="name" id="name" value="{{ $menu->name }}" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
    </div>

    <div class="mb-6">
        <label for="price" class="block text-lg font-semibold text-gray-700">Prijs</label>
        <input type="number" name="price" id="price" value="{{ $menu->price }}" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
    </div>
    <div class="mb-4">
        <label for="description" class="block text-lg font-semibold text-gray-700">bescgijrving</label>
        <input type="text" name="description" id="description" value="{{ $menu->description }}" class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
    </div>

    <div class="flex justify-center gap-4">
        <input type="submit" value="Update" class="bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-lg font-bold cursor-pointer transition-all duration-300 hover:scale-105">
    </div>
</form>

<!-- Verwijder Formulier -->
<form action="{{ route('menu.destroy', $menu) }}" method="POST" class="max-w-lg mx-auto mt-6">
    @csrf
    @method('DELETE')

    <div class="flex justify-center gap-4">
        <input type="submit" value="Verwijder" class="bg-red-500 hover:bg-red-600 text-white py-3 px-6 rounded-lg font-bold cursor-pointer transition-all duration-300 hover:scale-105">
    </div>
</form>
