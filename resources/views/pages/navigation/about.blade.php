{{-- Importation de notre page de base --}}
@extends("base")
    @section("title", "À propos")
    @section("content")
    <link rel="stylesheet" href="{{ asset ('assets/about.css')}}">


    {{-- Notre entête de page --}}
        <section class="header">
            <h1>À propos</h1>
        </section>

            <div class="wl">
                <h3>Bienvenue sur SeneBuild !</h3>
            </div>

        <section class="body">
            <div class="intro-page">

                <div class="top-logo">
                    <img src="{{asset ('image/logo.png')}}" alt="">
                </div>

                <div class="intro">
                    <p>Nous sommes une plateforme en ligne dédiée à simplifier le processus de
                       demande de permis de construire au Sénégal. Notre objectif est de faciliter
                       et d'accélérer le processus administratif pour les particuliers et les
                       professionnels de la construction.</p>
                </div>
            </div>


            <div class="intro-page">
                <div class="top-xp">
                    <p>Notre équipe expérimentée comprend des experts en architecture
                       et en urbanisme, ainsi que des spécialistes en technologie, qui
                       se sont réunis pour créer une solution pratique pour tous ceux
                       qui souhaitent construire ou rénover au Sénégal.</p>
                </div>

                <div class="crew-img">
                    <img src="{{asset ('image/crew.jpg')}}" alt="">
                </div>

            </div>

            <h2>Ce que nous offrons:</h2>

            <div class="aligne">

                <div class="sett">
                    <span>-Demande de permis de construire en ligne :</span>
                    <hr>
                    <p>Notre plateforme vous
                        permet de remplir facilement les formulaires nécessaires à la demande
                        de permis de construire. Nous avons simplifié le processus en le rendant
                        accessible en ligne, vous évitant ainsi des déplacements et des tracas
                        dministratifs.
                    </p>

                </div>

                <div class="aligne1">
                    <span>-Assistance personnalisée :</span>
                    <br>
                    <hr>
                        <p>Notre équipe est là pour vous
                           accompagner tout au long de votre demande. Si vous avez des
                           questions ou des problèmes, n'hésitez pas à nous contacter.
                           Nous sommes là pour vous aider à surmonter les obstacles éventuels
                           et à vous guider dans le processus.
                        </p>
                </div>

                <div class="aligne1">
                    <span>-Suivi de votre demande :</span>
                    <br>
                    <hr>
                    <p> Vous pouvez suivre l'avancement de votre
                        demande directement depuis votre compte utilisateur. Nous vous tenons
                        informé des étapes clés du processus et vous alertons en cas de besoin
                        d'informations supplémentaires ou de documents manquants.
                    </p>
                </div>

                <div class="aligne1">
                    <span>-Ressources utiles :</span>
                    <br>
                    <hr>
                    <p> Nous mettons à votre disposition des ressources
                        pratiques, telles que des guides et des conseils, pour vous aider à comprendre
                        les exigences du processus de demande de permis de construire. Vous y trouverez
                        également des informations sur les règles de construction en vigueur au Sénégal.
                    </p>

                </div>
            </div>

            <div class="intro-page">
                <div>
                    <p>Chez SeneBuild, nous croyons en la simplification et la transparence.
                       Nous nous engageons à fournir un service fiable et efficace, en mettant
                       l'accent sur la satisfaction de nos utilisateurs.<br>
                       N'hésitez pas à nous contacter si vous avez des questions ou des
                       commentaires. Nous sommes impatients de vous aider à concrétiser
                       vos projets de construction.</p>

                </div>

            </div>

            <h4>L'équipe SeneBuild</h4>
        </section>

    @endsection
