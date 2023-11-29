<section>
    <header>
        <h3 class="heading">wachtwoord veranderen</h3>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="form">
        @csrf
        @method('put')

        <div class="div-block-3">
            <label for="current_password">Huidige wachtwoord</label>
            <x-text-input id="current_password" name="current_password" type="password" class="w-input" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="div-block-3">
            <label for="password">Nieuw wachtwoord</label>
            <x-text-input id="password" name="password" type="password" class="w-input" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="div-block-3">
            <label for="password_confirmation">Bevestig wachtwoord</label>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="w-input" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="button">{{ __('opslaan') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
