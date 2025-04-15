<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-10 p-6 rounded-2xl shadow-xl border-4 border-dotted border-pink-400">
        @csrf
        <script src="https://cdn.tailwindcss.com"></script>

        <h2 class="text-3xl font-extrabold text-pink-600 mb-6 text-center">🍟 Friet bij Piet - Log in! 😋</h2>

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="w-full px-4 py-2 mb-4 border border-yellow-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 shadow-inner" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="w-full px-4 py-2 mb-4 border border-yellow-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 shadow-inner" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-pink-600 shadow-sm focus:ring-pink-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Forgot Password -->
        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-pink-500 hover:bg-pink-600 text-white py-3 px-6 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Register Link -->

    <div class="flex justify-center mt-10 mb-12">
        <a href="{{ route('register') }}">
            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                register
            </button>
        </a>
    </div>

    <!-- Back Button -->
    <div class="flex justify-center mt-10 mb-12">
        <a href="{{ route('welcome') }}">
            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                Terug
            </button>
        </a>
    </div>
</x-guest-layout>
