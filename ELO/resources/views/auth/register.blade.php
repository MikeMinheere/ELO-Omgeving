<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="form">
        @csrf

        <!-- First_name -->
        <x-text-input id="first_name" class="w-input" type="text" name="first_name" :value="old('first_name')" placeholder="First name" required autofocus autocomplete="first_name" />
        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

        <!-- Prefix -->
        <x-text-input id="prefix" class="w-input" type="text" name="prefix" :value="old('prefix')" placeholder="Prefix"/>
        <x-input-error :messages="$errors->get('prefix')" class="mt-2" />

        <!-- Last_name -->
        <x-text-input id="last_name" class="w-input" type="text" name="last_name" :value="old('last_name')" placeholder="Last name" required autofocus autocomplete="last_name" />
        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

        <!-- StudenNumber -->
        <x-text-input id="student_number" class="w-input" type="text" name="student_number" :value="old('student_number')" placeholder="Student Number" required autofocus autocomplete="student_number" />
        <x-input-error :messages="$errors->get('student_number')" class="mt-2" />

        <!-- Class Name -->
        <x-text-input id="class_name" class="w-input" type="text" name="class_name" :value="old('class_name')" placeholder="Class Name" required autofocus autocomplete="class_name" />
        <x-input-error :messages="$errors->get('class_name')" class="mt-2" />

        <!-- Email Address -->
        <x-text-input id="email" class="w-input" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <!-- Password -->
        <x-text-input id="password" class="w-input"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Confirm Password -->
        <x-text-input id="password_confirmation" class="w-input"
                        type="password"
                        placeholder="Confirm Password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <a style="text-align: center" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="submit-button w-button">
            {{ __('Register') }}
        </x-primary-button>

    </form>
</x-guest-layout>
