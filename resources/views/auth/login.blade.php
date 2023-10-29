<x-guest-layout>
    <a href="{{ route('loker') }}">
        <div class="font-semibold text-3xl mb-3 text-center">
            Login
        </div>
    </a>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        
            
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('loker') }}">
                <x-secondary-button>
                    {{ __('Back') }}
                </x-primary-button>
            </a>

            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="text-center">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('If you dont have an account yet, Click Me') }}
            </a>
        </div>
    </form>
</x-guest-layout>
