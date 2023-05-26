<section>
    <header>
        <h2 class="text-center text-muted mb-3 mt-5">
            {{ __('Changer mon mot de passe') }}
        </h2>

        <p class="text-center text-muted mb-5">
            {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester en sécurité.') }}
        </p>
    </header>

    <div class="col-md-4 mx-auto">
        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label for="current_password" :value="__('Mot de passe actuel')" />
                <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="password" :value="__('Nouveau mot de passe')" />
                <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="password_confirmation" :value="__('Confirmer mot de passe')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="d-grid gap-2">
                <x-primary-button class="btn btn-primary">{{ __('Changer') }}</x-primary-button>

                @if (session('status') === 'password-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('mot de passe changé !') }}</p>
                @endif
            </div>
        </form>
    </div>
</section>
