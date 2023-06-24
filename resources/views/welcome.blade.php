 {{-- Liaison de notre page d'accueil avec notre feuille de style --}}

<link rel="stylesheet" href="{{ asset ('css/home.css')}}">

    <div class="header">
        @extends("base")
        @section("title", "Accueil")
        @section("content")

        <div class="top-page">
            <!--slogan-->
            <div class="slogan">
                <h1>
                    Votre permis de construire, <br>plus rapide, plus efficace!
                </h1>
            </div>

            <!-- le bouton inscription-->
            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route ('soumettre une demande')}}">
                            <button class="inscription">soumettre une demande</button>
                        </a>
                    @else
                        <a href="{{ route('register') }}">
                            <button class="inscription">S'inscrire gratuitement</button>
                        </a>
                    @endauth
                @endif
            </div>

        </div>
    </div>

            <!--la;partie blanche qui vient après le bouton inscription-->
            <div class="icon-container">

                {{-- insertion de l'incone en 15 jours --}}
                <div class="icon" >
                    <img src="{{ asset ('icon/permis-icon.png')}}">
                    <figcaption>Obtenez votre permis <br>en 15 jours</figcaption>
                </div>

                {{-- Insertion de l'incone de service client --}}
                <div class="icon">
                    <img src="{{ asset ('icon/call-center-icon.png')}}" alt="icone">
                    <figcaption>Service client disponible <br>24h/24 7j/7</figcaption>
                </div>

                {{-- Insertion de l'icone ministére de l'urbanisme --}}
                <div class="icon">
                    <img src="{{ asset ('icon/Ministère-icon.png')}}" alt="icone">
                    <figcaption>En collaboration avec le <br> Ministère de l'Urbanisme,<br> du Logement et de <br> l'Hygiène Publique</figcaption>
                </div>
            </div>

        @endsection
