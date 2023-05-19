@extends("base")

    @section("title", "Accueil")

    @section("content")

              <!--slogan-->
              <div class="slogan">
                <h1>
                    Votre permis de construire, <br>plus rapide, plus efficace!
                </h1>
            </div>
            <!-- le bouton inscription-->
            <a href="{{ route('register') }}">
                <button class="inscription">S'inscrire gratuitement</button>
            </a>

            <!--la;partie blanche qui vient après le bouton inscription-->
            <div class="icon-container">

                {{-- insertion de l'incone en 15 jours --}}
                <div class="icon1" >
                    <img src="{{ asset ('icon/permis-icon.png')}}">
                    <figcaption>Obtenez votre permis <br>en 15 jours</figcaption>
                </div>

                {{-- Insertion de l'incone de service client --}}
                <div class="icon2">
                    <img src="{{ asset ('icon/call-center-icon.png')}}" alt="icone">
                    <figcaption>Service client disponible <br>24h/24 7jours/7</figcaption>
                </div>

                {{-- Insertion de l'icone ministére de l'urbanisme --}}
                <div class="icon3">
                    <img src="{{ asset ('icon/Ministère-icon.png')}}" alt="icone">
                    <figcaption>En collaboration avec le Ministère de l'Urbanisme,<br> du Logement et de l'Hygiène Publique</figcaption>
                </div>
            </div>

        @endsection
