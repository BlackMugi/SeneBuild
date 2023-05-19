<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield("title") </title>
    {{-- Liaison de notre feuille de style --}}
    <link rel="stylesheet" href="{{ asset ('assets/base.css')}}">
</head>
<body>
    {{-- Notre brre de navigation --}}

    {{-- Inclusion de la barre de navigation --}}
    @include("navbar.navbar")
    @yield("content")


    {{-- inclusion de notre script --}}
    @include("script")


    {{-- Le footer de notre application --}}
    <footer class="section1">

        {{-- pour la partie grise foncée --}}
            <section class="utile">

                {{-- Liens Rapide --}}
                <div class="side1">
                    <h3>Liens rapides</h3>
                    <a class="nav" href="#"><span class="icon-texts">Qui sommes-nous?</span></a><br>
                    <a class="nav" href="#"><span class="icon-texts">Politique de confidentialités</span></a><br>
                    <a class="nav" href="#"><span class="icon-texts">Mentions légales</span></a><br>
                    <a class="nav" href="#"><span class="icon-texts">FAQ</span></a><br>
                    <a class="nav" href="#"><span class="icon-texts">Composé du document</span></a><br>
                </div>

                <!--contact-->
                <div class="side2">
                    <h3>Contact</h3>

                    {{-- numero de téléphone --}}
                    <div class="icon-cont">
                        <i><img src="{{ asset ('icon/phone.png')}}"></i>
                        <span class="icon-text">+221 33 826 39 65</span>
                    </div>

                    {{-- adresse email --}}
                    <div class="icon-cont">
                        <i><img src="{{ asset ('icon/mail.png')}}"></i>
                        <span class="icon-text">senebuild@gmail.com</span>
                    </div>

                    {{-- addresse map --}}
                    <div class="icon-cont">
                        <i><img src="{{ asset ('icon/map.png')}}"></i>
                        <span class="icon-text">Médina, Rue 31 X 20</span>
                    </div>
                </div>

                <!--Rejoignez nous-->
                <div class="side3">
                    <h3>Rejoignez nous</h3>

                    {{-- Facebook --}}
                    <a class="social" href="https://www.facebook.com">
                        <div class="icon-container3">
                            <i><img src="{{ asset ('icon/facebook.png')}}"></i>
                            <span class="icon-textt">Facebook</span>
                        </div>
                    </a>

                    {{-- Instagram --}}
                    <a class="social" href="https://www.instagram.com">
                        <div class="icon-container3">
                            <i><img src="{{ asset ('icon/instagram.png')}}"></i>
                            <span class="icon-textt">Instagram</span>
                        </div>
                    </a>

                    {{-- Twitter --}}
                    <a class="social" href="https://twitter.com/">
                        <div class="icon-container3">
                            <i><img src="{{ asset ('icon/twitter.png')}}"></i>
                            <span class="icon-textt">Twitter</span>
                        </div>
                    </a>


                    {{-- Linkdin --}}
                    <a class="social" href="https://fr.linkedin.com/">
                        <div class="icon-container3">
                            <i><img src="{{ asset ('icon/linkdin.png')}}"></i>
                            <span class="icon-textt">Linkedin</span>
                        </div>
                    </a>


                </div>
            </section>

             {{-- insertion du logo dans le footer --}}
            <section class="logo1">
                <a href="{{ route ("accueil") }}">
                    <img src="{{ asset ('image/logo.png')}}">
                </a>
            </section>


            {{-- pour la partie noir --}}
            <section class="footer">
                <span class="copyright_text"> © {{date ('Y')}} SeneBuild. All rights reserved</span>
            </section>
    </footer>
</body>
</html>

