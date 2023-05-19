@include('navbar.navbar')
    {{-- Liaison de notre feuille de style --}}
    <link rel="stylesheet" href="{{ asset ('assets/auth.css')}}">

    <div class="contain">
        <h1>Inscription</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="section">
                            <!-- Name -->

                <x-input-label for="name" :value="__('Prénom & Nom')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="text-sm text-red-600 space-y-1" />

            <!-- Email Address -->

                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />


            <!-- Password -->
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="text-sm text-red-600 space-y-1" />

            <!-- Confirm Password -->
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="text-sm text-red-600 space-y-1" />


            <div class="login_section">
                <a href="{{ route('login') }}">
                    {{ __("Vous êtes déjà inscrit?") }}
                </a>
            </div>
            <x-primary-button class="ml-4">
                {{ __("S'inscrire") }}
            </x-primary-button>
            </div>
        </form>
    </div>
