<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-lg w-full mx-auto bg-white p-8 rounded-2xl shadow-lg">
        @csrf

        <!-- Name -->
        <div class="mb-6">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full border-4 border-dotted border-yellow-300 p-4 rounded-full shadow-lg focus:ring-2 focus:ring-pink-500 focus:outline-none" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border-4 border-dotted border-yellow-300 p-4 rounded-full shadow-lg focus:ring-2 focus:ring-pink-500 focus:outline-none" type="email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full border-4 border-dotted border-yellow-300 p-4 rounded-full shadow-lg focus:ring-2 focus:ring-pink-500 focus:outline-none" type="password" name="password" required />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border-4 border-dotted border-yellow-300 p-4 rounded-full shadow-lg focus:ring-2 focus:ring-pink-500 focus:outline-none" type="password" name="password_confirmation" required />
        </div>

        <div class="flex justify-center mt-10 mb-12">

            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                {{ __('Register') }}
            </button>

        </div>


    </form>
    <div class="flex justify-center mt-10 mb-12">
        <a href="{{ route('login') }}">
            <button class="bg-pink-500 hover:bg-pink-600 text-white text-2xl font-bold px-10 py-4 rounded-full shadow-lg transition-transform duration-300 hover:scale-110">
                login
            </button>
        </a>
    </div>

</x-guest-layout>
