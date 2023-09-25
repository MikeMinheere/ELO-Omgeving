<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="form">
        @csrf

        <p>
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </p>

        <!-- Email Address -->

            <x-text-input id="email" class="w-input" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


            <x-primary-button class="submit-button w-button">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
    </form>
</x-guest-layout>
