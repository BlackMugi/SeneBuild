@extends("base")


    @section("title", "Aide & Assistance")
    @section("content")

    <link rel="stylesheet" href="{{ asset ('css/help.css')}}">

    <section class="header">
        <h1>Aide & Assistance</h1>
    </section>

    <div class="body">
        <section class="intro-content">
            <div class="intro-txt">
                <p>
                    Chez SeneBuild, nous sommes déterminés à vous offrir une aide et
                    une assistance complètes tout au long de votre processus de demande
                    de permis de construire. Nous comprenons que ce processus peut être
                    complexe et nous sommes là pour vous accompagner à chaque étape, afin
                    de rendre votre expérience aussi fluide et agréable que possible.
                </p>
            </div>



            <h2>Comment pouvons-nous vous aider ?</h2>

            <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <span>-FAQ :</span>
                    <p> Consultez notre section FAQ (Foire aux questions) pour trouver des réponses aux
                        questions courantes concernant le processus de demande de permis de construire.
                        Vous y trouverez des informations sur les formulaires, les délais, les frais et
                        bien plus encore.
                    </p>
                </div>

                <div class="carousel-item">
                    <span>-Support en ligne  :</span>
                    <p>Notre équipe de support est disponible pour répondre à toutes vos
                       questions et vous aider en cas de problèmes techniques ou de difficultés lors de
                       l'utilisation de notre plateforme. Vous pouvez nous contacter via le formulaire
                       de contact sur notre site et nous nous efforcerons de vous apporter une assistance
                       rapide et efficace.
                    </p>
                </div>

                <div class="carousel-item">
                    <span>-Guides et ressources :</span>
                    <p>Nous mettons à votre disposition des guides détaillés et des ressources utiles
                       pour vous aider à naviguer à travers le processus de demande de permis de
                       construire. Ces ressources fournissent des informations précieuses sur les
                       réglementations en vigueur au Sénégal, les exigences documentaires et les bonnes
                       pratiques pour maximiser vos chances de succès.
                    </p>
                </div>

                <div class="carousel-item">
                    <span>-Suivi de votre demande :</span>
                    <p> Notre plateforme vous permet de suivre facilement l'état d'avancement de votre
                        demande de permis de construire. Vous serez informé des différentes étapes du
                        processus et des éventuelles actions nécessaires de votre part. Si vous avez
                        des questions concernant l'avancement de votre demande, notre équipe est là
                        pour vous fournir les réponses dont vous avez besoin.
                    </p>
                </div>

                <div class="carousel-item">
                    <span>-Assistance personnalisée:</span>
                    <p>Chaque projet de construction est unique, c'est pourquoi nous offrons une assistance
                       personnalisée adaptée à vos besoins spécifiques. Notre équipe d'experts est là
                       pour vous guider et vous conseiller tout au long du processus de demande, en
                       vous aidant à remplir les formulaires, à rassembler les documents nécessaires
                       et à résoudre tout problème éventuel.
                    </p>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            </div>


            <div class="end-content">
                <p>
                    Notre objectif est de vous offrir une expérience sans tracas lors de votre
                    demande de permis de construire.Nous sommes engagés à fournir un service
                    clientèle exceptionnel et à répondre à toutes vos préoccupations de manière
                    rapide et efficace. <br>
                    N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.
                    Notre équipe est là pour vous aider à réaliser votre projet de construction en
                    vous offrant l'aide et l'assistance dont vous avez besoi
                </p>
            </div>

            <h4>L'équipe SeneBuild</h4>
        </section>
    </div>

    @endsection
