<link rel="stylesheet" href="{{asset('css/ressources.css')}}">
@extends("base")
    @section("title", "Ressources Outiles")
    @section("content")

        <section class="header">
            <h1 id="h1">Ressources Outiles</h1>
        </section>
        <section class="body">
            <h4>Vous êtes sur le point de démarrer un projet de construction et
                vous avez besoin d'aide pour comprendre le processus de demande de
                permis de construire ? Ne cherchez plus ! Nous mettons à votre
                disposition un guide complet et gratuit qui vous accompagnera pas
                à pas dans la procédure de demande de permis de construire.
                Téléchargez notre guide dès maintenant pour obtenir toutes les
                informations essentielles, des conseils pratiques et des exemples
                de documents pour vous aider à préparer votre demande.
            </h4>
            <div class="intro-section">
                <h3>Introduction au permis de construire:</h3>
                <p>Le permis de construire est un document administratif essentiel au Sénégal
                    pour tous les propriétaires de terrains souhaitant entreprendre une
                    construction, ainsi que pour effectuer des modifications importantes sur
                    des constructions existantes. Il représente l'autorisation officielle
                    donnée par l'autorité compétente du lieu où se situe le projet de
                    construction.
                </p>
            </div>

            <div class="role-section">
                <h3>Role:</h3>
                <p>En résumé, le permis de construire joue un rôle fondamental dans le processus de
                    construction en réglementant et en contrôlant le développement urbain.
                    Il permet d'assurer la conformité des nouvelles constructions aux normes et aux
                    réglementations en vigueur, garantissant ainsi la sécurité, la qualité et
                    l'harmonie de l'environnement bâti.
                </p>
            </div>

            <div class="doc-section">
                <h3>Documents requis :</h3>
                <p>Les documents à fournir lors de la soumission pour l'obtention d'un permis de construire sont:
                </p>
                <div>
                    <span>1-Une demande adressée au maire de votre localité (PDF)</span>
                </div>

                <div>
                    <span>2-Photocopie d'acte de propriété qui peut être un titre foncier, une délibération, un bail etc... (PDF)</span>
                </div>

                <div>
                    <span>3-Plan de Délimitation du projet (PDF)</span>
                </div>

                <div>
                    <span>4-Plan de Construction (PDF)</span>
                </div>

                <div>
                    <span>5-Fiche de renseignement du projet (PDF)</span>
                </div>

                <div>
                    <span>6-Devis Descriptif (PDF)</span>
                </div>

                <div>
                    <span>7-Plan de Fosse Sceptique (PDF)</span>
                </div>
            </div>

            <div class="top-download">
                <h4>Télécharger le Guide de demande de permis de construire 👇
                </h4>
                <a href="{{route('ressources')}}">
                    <button type="button" class="btn btn-info btn-lg">Télécharger <i class="fas fa-download"></i></button>
                </a>
            </div>

            <div class="obligation">
                <h3>Obligations:</h3>
                <p>L'autorisation de construire est obligatoire au Sénégal et qu'il est
                    interdit d'y déroger. Celui qui ne respecte pas cette règle peut encourir une
                    amende pouvant aller jusqu'à 10 000 000 FCFA. Les maîtres d'œuvre et les
                    entrepreneurs impliqués dans la construction risquent également les mêmes amendes
                    et peuvent même être emprisonnés. Le tribunal a également le pouvoir de demander
                    la démolition des constructions illégales. Lorsqu'un permis de construire est
                    délivré, un panneau doit être affiché sur le chantier, indiquant le numéro et
                    la date de délivrance du permis. Dans le cas contraire, des poursuites
                    judiciaires sont possibles.
                </p>
            </div>
        </section>
    @endsection
