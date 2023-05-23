@extends("base")


    @section("title", "Politique de confidentialité")
    @section("content")
    {{-- Liason de notre page avec du css --}}
    <link rel="stylesheet" href="{{ asset ('assets/confid.css')}}">

        {{-- L'entête de notre page --}}
        <Section class="header">
            <h1>Politique de confidentialité</h1>
        </Section>

        {{-- Le corps de notre page --}}
        <section class="body">

            <div class="intro-page">
                <div>
                    <p>Chez SeneBuild, nous accordons une grande importance à la confidentialité
                       et à la protection de vos données personnelles. Cette politique de
                       confidentialité explique comment nous collectons, utilisons, stockons et
                       protégeons vos informations lors de votre utilisation de notre plateforme
                       de demande de permis de construire.</p>
                </div>
            </div>

            <div class="intro-page">

                <h2>Collecte et utilisation des informations :</h2>
                <div>
                    <p>Lorsque vous utilisez notre site web pour effectuer une demande de permis
                       de construire, nous pouvons collecter certaines informations personnelles
                       nécessaires pour traiter votre demande. Cela peut inclure votre nom, votre
                       adresse, vos coordonnées et d'autres informations pertinentes.</p>
                </div>
                <div>
                    <p>Nous utilisons ces informations uniquement dans le cadre de votre demande
                       de permis de construire. Elles sont strictement confidentielles et ne seront
                       jamais partagées avec des tiers sans votre consentement explicite.</p>
                </div>

            </div>

            <div class="intro-page">

                <h2>Sécurité des informations :</h2>
                <div>
                    <p>Nous mettons en place des mesures de sécurité appropriées pour protéger vos informations
                       personnelles contre tout accès non autorisé, utilisation abusive, divulgation ou
                       modification. Nous utilisons des protocoles de sécurité avancés pour garantir la
                       confidentialité et l'intégrité de vos données.
                    </p>
                </div>
            </div>

            <div class="intro-page">

                <h2>Cookies :</h2>
                <div>
                    <p>Nous tenons à vous informer que nous n'utilisons pas de cookies sur notre site web.
                       Nous respectons votre vie privée et nous ne collectons pas d'informations
                       personnelles non nécessaires à votre demande de permis de construire.
                    </p>
                </div>
            </div>

            <div class="intro-page">

                <h2>Liens vers des sites tiers :</h2>
                <div>
                    <p>Notre site web peut contenir des liens vers des sites web de tiers. Veuillez
                       noter que cette politique de confidentialité s'applique uniquement à notre
                       site SeneBuild. Nous ne sommes pas responsables des pratiques de confidentialité
                       des autres sites web. Nous vous encourageons à lire attentivement les politiques
                       de confidentialité de ces sites tiers.
                    </p>
                </div>
            </div>

            <div class="intro-page">

                <h2>Modifications de la politique de confidentialité :</h2>
                <div>
                    <p>Nous nous réservons le droit de mettre à jour ou de modifier cette politique
                       de confidentialité à tout moment. Toute modification sera publiée sur cette page.
                       Il est recommandé de consulter régulièrement cette politique pour rester informé
                       des éventuelles mises à jour.
                    </p>
                </div>
            </div>

            <p>Nous sommes engagés à respecter votre confidentialité et à protéger vos informations
               personnelles. Si vous avez des questions ou des préoccupations concernant notre
               politique de confidentialité, n'hésitez pas à nous contacter.
            </p>

            <h3>L'équipe SeneBuild</h3>
        </section>
    @endsection
