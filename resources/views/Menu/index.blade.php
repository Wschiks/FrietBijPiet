    <h1 class="text-5xl font-extrabold text-center text-yellow-600 my-10">🛠️ Beheer Menu - Friet bij Piet</h1>

    {{-- Grote knop naar de frontend winkel --}}

    <!-- Knop 1: Gaat naar welcome.blade.php -->
    <div class="flex justify-center mb-12">
        <a href="{{ route('menu.create') }}">
            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                Maak nieuw eten
            </button>
        </a>
    </div>
    <div class="flex justify-center mt-10 mb-12">
        <a href="{{ route('welcome') }}">
            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                terug
            </button>
        </a>
    </div>
    <div class="flex justify-center mt-10 mb-12">
        <a href="{{ route('login') }}">
            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                login
            </button>
        </a>
    </div>

    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Producten Grid --}}

    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
        @foreach($products as $product)
            <div class="bg-white border-4 border-dotted border-yellow-300 rounded-2xl shadow-xl p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <h2 class="text-2xl font-bold text-pink-600 mb-2">{{ $product->name }}</h2>
                <p class="text-lg text-gray-700 mb-1">💰 Prijs: <span class="font-semibold text-green-600">€{{ number_format($product->price, 2, ',', '.') }}</span></p>
                <p class="text-sm text-gray-500 mb-4">🆔 ID: {{ $product->id }}</p>

                @auth
                    @if(auth()-> user()->id ===1)
                <div class="flex gap-2">
                    <a href="{{ url('menu/'.$product->id.'/edit') }}" class="w-1/2">
                        <button type="button" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-xl w-full transition-transform duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-yellow-300">
                            ✏️ Bewerken
                        </button>
                    </a>
                    <form action="{{ url('menu/'.$product->id) }}" method="POST" class="w-1/2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-xl w-full transition-transform duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-red-300">
                            🗑️ Verwijderen
                        </button>
                    </form>
                </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
