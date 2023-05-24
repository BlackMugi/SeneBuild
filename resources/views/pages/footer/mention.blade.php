@extends("base")

    @section("title", "Mention Légale")
    @section("content")

        {{-- Liason de notre page avec du css --}}
        <link rel="stylesheet" href="{{ asset ('assets/mention.css')}}">

        {{-- L'entête de notre page --}}
        <Section class="header">
            <h1>Mentions Légales</h1>
        </Section>

        <section class="body">

            <div class="intro-page">
                <h4>Propriétaire du site :</h4>

                <div>
                    <p>
                        Le site SeneBuild (www.senebuild.sn) est la propriété de SeneBuild.
                    </p>
                </div>

            </div>

            <div class="intro-page">
                <h4>Coordonnées :</h4>

                <div>
                    <p>
                        Adresse: Médina Rue 31 X 20 <br>
                        Tel: +221 33 826 39 65 <br>
                        mail: senebuild@gmail.com  <br>
                    </p>
                </div>

            </div>

            <div class="intro-page">
                <h4>Responsable de la publication :</h4>

                <div>
                    <p>
                        Le responsable de la publication du site SeneBuild est l'équipe
                        informatique de la promotion 7 de l'Université Numérique Cheikh
                        Hamidou Kanté.
                    </p>
                </div>

            </div>

            <div class="intro-page">
                <h4>Hébergement du site :</h4>

                <div>
                    <p>
                        Le site SeneBuild est hébergé par LWS <br>
                        
                    </p>
                </div>

            </div>

        </section>

    @endsection
