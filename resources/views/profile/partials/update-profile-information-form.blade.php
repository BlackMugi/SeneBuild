

    <section class="profil">
        <header>
            <h2 class="text-center text-muted mb-3 mt-5">
                {{ __('Mes informations') }}
            </h2>

            <p class="text-center text-muted mb-5">
                {{ __("Mettre à jour les informations de profil ainsi que l'adresse e-mail de votre compte.") }}
            </p>
        </header>

        <div class="col-md-5 mx-auto">
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <x-input-label for="name" :value="__('Prénom & Nom')" />
                    <x-text-input  id="name" name="name" type="text" class="form-control"  :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __("Votre adresse e-mail n'est pas vérifiée.") }}

                                <button form="send-verification" class="underline">
                                    {{ __("Cliquez ici pour renvoyer l'e-mail de vérification.") }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="d-grid gap-2">
                    <x-primary-button class="btn btn-primary">{{ __('Modifier') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                        >{{ __('Effectué !') }}</p>
                    @endif
                </div>
            </form>

        </div>
    </section>


