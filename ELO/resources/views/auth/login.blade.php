<x-guest-layout>
    <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <!-- Email Address -->
            <div>
                <x-text-input id="email" class="w-input" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>

                <x-text-input id="password" class="w-input"
                                type="password"
                                name="password"
                                placeholder="Wachtwoord"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Onthoud mijn account') }}</span>
                </label>
            </div>

            <x-primary-button class="submit-button w-button">
                    {{ __('Log in') }}
            </x-primary-button>
        </form>
        <p class="paragraph-2">Nog geen account? <a href="http://elo.test/register">Registreer hier</a></p>
        <p class="paragraph-2">Wachtwoord vergeten? <a href="http://elo.test/forgot-password">Klik hier</a></p>
</x-guest-layout>
