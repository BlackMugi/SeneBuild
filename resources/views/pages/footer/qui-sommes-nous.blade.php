@extends("base")
    @section("title", "Qui sommes nous ?")
    @section("content")
        {{-- Liason de notre page avec du css --}}
        <link rel="stylesheet" href="{{ asset ('assets/qui-sommes-nous.css')}}">

        {{-- L'entête de notre page --}}
        <section class="header">
            <h1>Qui sommes nous ?</h1>
        </section>

        <section class="body">

            <div class="intro-page">
                <div class="intro">
                    <p class="texte">SeneBuild est une entreprise spécialisée dans les services de demande de
                       permis de construire au Sénégal. Notre équipe est composée d'experts
                       passionnés par l'architecture, l'urbanisme et les nouvelles technologies.
                       Nous avons combiné nos connaissances et notre expérience pour créer une
                       plateforme en ligne pratique et efficace, simplifiant ainsi le processus
                       de demande de permis de construire pour nos utilisateurs.
                    <p>
                </div>
            </div>


            <div class="intro-page">
                <h2>Notre mission :</h2>
                <div class="top-xp">
                    <p>Notre mission est de faciliter le processus de demande de permis de
                       construire au Sénégal en mettant à votre disposition une solution en ligne
                       complète. Nous voulons vous aider à économiser du temps et des efforts
                       précieux, tout en vous offrant une expérience utilisateur agréable et
                       sans tracas.
                    </p>
                </div>

            </div>

            <h2>Nos valeurs :</h2>

            <div class="aligne">

                <div class="sett">
                    <span>1- Simplification :</span>
                    <hr>
                    <p>Nous croyons fermement en la simplification des procédures administratives.
                       Nous avons conçu notre plateforme pour éliminer les tracas inutiles et rendre
                       le processus de demande de permis de construire aussi simple et convivial que
                       possible.
                    </p>

                </div>

                <div class="aligne1">
                    <span>2- Fiabilité :</span>
                    <br>
                    <hr>
                        <p>Nous nous engageons à fournir un service fiable et de qualité à nos utilisateurs.
                           Nous nous assurons que toutes les informations et les documents soumis dans le
                           cadre de la demande sont traités avec soin et confidentialité.
                        </p>
                </div>

                <div class="aligne1">
                    <span>3- Transparence :</span>
                    <hr>
                    <p> Vous pouvez suivre l'avancement de votre
                        demande directement depuis votre compte utilisateur. Nous vous tenons
                        informé des étapes clés du processus et vous alertons en cas de besoin
                        d'informations supplémentaires ou de documents manquants.
                    </p>
                </div>

                <div class="aligne1">
                    <span>4- Service clientèle :</span>
                    <hr>
                    <p> Nous accordons une grande importance à la satisfaction de nos utilisateurs.
                        Notre équipe est disponible pour répondre à toutes vos questions, vous guider
                        et vous aider à résoudre les éventuels problèmes rencontrés lors de votre demande.
                    </p>

                </div>
            </div>

            <div class="intro-page">
                <h2>Notre engagement envers vous :</h2>
                <div>
                    <p>
                       Chez SeneBuild, nous sommes déterminés à vous offrir une expérience de
                       demande de permis de construire simple, pratique et efficace. Nous travaillons
                       constamment à l'amélioration de notre plateforme et à l'ajout de nouvelles
                       fonctionnalités pour répondre à vos besoins.
                    </p>

                </div>

                <div>
                    <p class="texte">
                        Nous sommes impatients de vous accompagner dans la réalisation de vos
                        projets de construction au Sénégal. N'hésitez pas à nous contacter si vous
                        avez des questions ou des commentaires. Nous sommes là pour vous aider !
                    </p>
                </div>

            </div>

            <h4>L'équipe SeneBuild</h4>
        </section>
    @endsection
