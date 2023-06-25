{{-- On vas lier notre barre de navigation à du Css  --}}
<link rel="stylesheet" href="{{ asset ('css/nav.css')}}">


    {{-- Création de notre barre de Navigation --}}
<nav class="navbar navbar-expand-lg bg-transparent">

    {{-- Insertion de notre logo --}}
    <a class="navbar-brand" href="{{ route ("accueil") }}">
        <img class="logo" src="{{ asset ('image/logo.png')}}" alt="Logo du site">
    </a>

<div class="container-sm">

    {{-- Liens de navigation --}}
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

            {{-- l'accueil --}}
            <a class="nav-link @if(Request::route()->getName() == 'accueil') active @endif" aria-current="page"
            href="{{ route ("accueil") }}">Accueil
            </a>

            {{-- Soumettre une demande --}}
            <a class="nav-link @if(Request::route()->getName() == 'soumettre une demande') active @endif"
                href="{{ route ("soumettre une demande") }}">Soumettre une demande
            </a>

            {{-- Suivis du statut --}}
            <a class="nav-link @if(Request::route()->getName() == 'suivis du statut') active @endif"
               href="{{ route ("suivis du statut") }}">Suivi du statut
            </a>

            {{-- Aide & Assistance --}}
            <a class="nav-link @if(Request::route()->getName() == 'aide & assistance') active @endif"
               href="{{ route ("aide & assistance") }}">Aide et Assistance
            </a>

            {{-- à propos --}}
            <a class="nav-link @if(Request::route()->getName() == 'à propos') active @endif"
               href="{{ route ("à propos") }}">A propos
            </a>

        </div>
    </div>
</div>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth

            <div class="dropdown mt-3" style="margin-right: 150px">

                {{-- Boutons du dropdown --}}
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" id="demandes-dropdown" data-bs-toggle="dropdown">
                    <i class="fa fa-user"></i>
                </button>

                <ul class="dropdown-menu" aria-labelledby="demandes-dropdown">
                    <a id="align"  href="{{ route ("profile.edit")}}">
                        <button class="bloc-top">
                            <div>{{ substr(Auth::user()->name, 0, 1) }}</div>
                        </button>
                        <p>Profil</p>
                    </a>

                    <a id="align" class="align"  href="{{ route ("dashboard")}}">
                        <i id="icon" class="fas fa-chart-bar"></i>
                        <p>Tableau de board</p>
                    </a>
                    <div class="icon-logout">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link class="align" id="align" :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <i id="icon" class="fas fa-sign-out-alt"></i>
                                <p>Se déconnecter</p>
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </ul>
            </div>

                {{-- <div class="dropdown">







                </div> --}}

            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    <button class="login">
                     se connecter
                    </button>
                </a>
            @endauth
        </div>
    @endif
    </div>
</div>
</nav>
