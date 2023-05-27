

@extends("base")

    @section("title", "FAQ")
    @section("content")

    {{-- <link rel="stylesheet" href="{{asset('assets/base.css')}}"> --}}
    <section class="faqheader">
        <h1 class="faqh1">FAQ</h1>
    </section>

    <section class="faqbody">

        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Qu'est-ce que SeneBuild ?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> <p class="text-secondary"> SeneBuild est une plateforme en ligne qui facilite le processus de demande de permis de construire au Sénégal. Notre plateforme vous permet de remplir facilement les formulaires de demande, de soumettre les documents nécessaires et de suivre l'état d'avancement de votre demande.</p></div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Qu'est ce qu'un permis de construire ?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> <p class="text-secondary"> Un permis de construire est un document officiel délivré par les autorités compétentes pour permettre la réalisation d'un projet de construction conformément aux réglementations en vigueur dans le pays. C'est un processus administratif qui vise à assurer que les projets de construction respectent les normes de construction, d'urbanisme, de sécurité et d'environnement.</p></div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Qui peut faire une demande de permis de construire ?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><p class="text-secondary">Le permis de construire au Sénégal doit être demandé par le propriétaire des lieux (que cela soit une personne physique ou morale) ou par l’intermédiaire de son mandataire.</p> </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Dans quel cas je peut demander un permis de construire ?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><p class="text-secondary">Au Sénégal, vous devez faire une demande d'autorisation de construire dans les cas suivants : <br>
                    -Si vous prévoyez de construire un nouveau bâtiment, que ce soit à des fins résidentielles, commerciales, industrielles ou institutionnelles, vous devez obtenir une autorisation de construire. <br>
                    <br>
                    -Si vous envisagez d'agrandir ou de surélever un bâtiment existant, vous devez également obtenir une autorisation de construire, même si cela concerne une partie du bâtiment. <br>
                    <br>
                    -Si vous souhaitez modifier la destination d'un bâtiment, par exemple en passant d'un usage résidentiel à un usage commercial, une autorisation de construire est nécessaire. <br>
                    <br>
                    -Dans certains cas, des travaux de rénovation ou de restauration peuvent nécessiter une autorisation de construire, en particulier si ces travaux modifient l'aspect extérieur du bâtiment. <br>
                    <br>
                    -Certaines constructions spécifiques, telles que les piscines, les clôtures de grande taille, les panneaux publicitaires, les antennes, etc., peuvent également nécessiter une autorisation de construire. <br>
                    <br></p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Quelle la duré de validitée du permis de construire ?
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><p class="text-secondary"> La durée de validité d'un permis de construire est de trois ans à compter de sa délivrance. Cela signifie que vous disposez de trois ans à partir de la date d'obtention du permis pour commencer les travaux de construction.En outre, il faudra le renouveler tous les trois ans si les travaux de construtions ne sont pas aboutis.</p></div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                    Quelles sont les documents à fournir pour faire une demande de permis de construire ?
                  </button>
                </h2>
                <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-secondary">
                        1-Une demande addressée au maire de votre localité (PDF) <br> <br>
                        2-Photocopie d'acte de propriété qui peut être un titre foncier, une  délibération, un bail etc... (PDF) <br> <br>
                        3-Plan de Délimitation du projet (PDF)<br> <br>
                        4-Plan de Construction (PDF)<br> <br>
                        5-Fiche de renseignement du projet (PDF) <br> <br>
                        6-Devis Descriptif (PDF) <br> <br>
                        7-Plan de Fosse Sceptique (PDF) <br> <br>
                    </p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                    Combien devrais je payer pour faire une demande de permis de Construire ?
                  </button>
                </h2>
                <div id="flush-collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p class="text-secondary">
                            Le coût total varie selon les localités. Il se repartit ainsi : <br> <br>
                            -Le quittance de domaine qui est de 5000F CFA. <br> <br>
                            -Le Timbre fiscal qui est de 1000F CFA. <br> <br>
                            -Le quittance mairie qui varie en fonction des communes.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                    Quelle est la durée d'obtention du permis de construire ?
                  </button>
                </h2>
                <div id="flush-collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-secondary">La durée d'obtention du permis de contruire est de 15 jours</p>
                  </div>
                </div>
            </div>
        </div>




    </section>

    @endsection
