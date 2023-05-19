<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
    <section class="auth-page">
        @include('navbar.navbar')
        <!-- Session Status -->
        <div class="container">
           <h1>Se connecter</h1>
           <form method="POST" action="{{ route('login') }}">
               @csrf

                   <!-- Email Address -->
                   <div class="margin">
                       <x-input-label class="label" for="email" :value="__('Email')" />
                       <br>
                       <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                       <x-input-error :messages="$errors->get('email')" class="mt-2" />
                   </div>

                   <!-- Password -->
                   <div class="margin">
                       <x-input-label class="label" for="password" :value="__('Mot de passe')" />
                       <br>
                       <x-text-input id="password" class="input"
                               type="password"
                               name="password"
                               required autocomplete="current-password" />

                       <x-input-error :messages="$errors->get('password')" class="mt-2" />
                   </div>

                   <!-- Se Souvenir de moi -->
                   <div class="display">
                       <div class="check">
                           <label for="remember_me" class="inline-flex">
                               <input id="remember_me" type="checkbox" class="rounded" name="remember">
                               <span class="ml-2">{{ __('Se souvenir de moi') }}</span>
                           </label>
                       </div>

                       <div class="flex items-center justify-end mt-4">
                           @if (Route::has('password.request'))
                               <a class="mpo" href="{{ route('password.request') }}">
                                   {{ __('mot de passe oublié ?') }}
                               </a>
                           @endif
                       </div>
                   </div>

                   <x-primary-button class="btn">
                       {{ __('Se connecter') }}
                   </x-primary-button>
                <div class="register_section">
                    <p>vous ne possédez pas de compte ?</p>
                    <a href="{{route("register")}}">s'inscrire</a>
                </div>
               </div>



            </form>
        </div>
</body>
</html>
<link rel="stylesheet" href="{{ asset ('assets/auth.css')}}">
