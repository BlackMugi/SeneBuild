<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/srequest.css')}}">
    <title>Faire une demande</title>
</head>
<body>

    <section class="draft">
        <img src="{{asset ('image/building-permit.png')}}" alt="">

        <div class="form">
            <h1>Faire une demande</h1>

            <form method="POST" action="{{ route('demande') }}" enctype="multipart/form-data">
                @csrf

                <div class="demandeur">
                    <div class="mb-3">
                        <label class="form-label" for="prenom">Prénom du demandeur:</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>

                    <div>
                        <label class="form-label" for="nom">Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                </div>


                <div class="number col-md-10 mx-auto mb-3">
                    <label class="form-label" for="telephone">Numéro de téléphone:</label>
                    <input type="number" class="form-control" id="telephone" name="telephone">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                      <label class="form-label" for="type_batiment">Type de Bâtiment:</label>
                      <select class="form-select" id="type_batiment" name="type_batiment" required>
                        <option disabled selected hidden><p class="text-secondary fst-italic"> --Choisir--</p></option>
                        <option value="Commercial">Commercial</option>
                        <option value="Habitation">Habitation</option>
                      </select>
                    </div>
                    <div class="col-md-5 mb-3">
                      <label class="form-label" for="commune">Commune:</label>
                      <select id="commune" class="form-select" name="commune" required>
                        <option disabled selected hidden>--Choisir--<p class="text-secondary fst-italic"></p></option>
                        <option value="Grand Yoff">Grand Yoff</option>
                        <option value="Thiès">Thiès</option>
                      </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                      <label class="form-label" for="niveau">Niveau:</label>
                      <select class="form-select" id="niveau" name="niveau" required>
                        <option disabled selected hidden><p class="text-secondary">--Choisir--</p></option>
                        <option value="1">RDC</option>
                        <option value="2">R+1</option>
                        <option value="3">R+2</option>
                        <option value="4">R+3</option>
                        <option value="5">R+4</option>
                        <option value="6">R+5</option>
                        <option value="7">R+6</option>
                        <option value="8">R+7</option>
                        <option value="9">R+8</option>
                        <option value="10">R+9</option>
                        <option value="11">R+10</option>
                      </select>
                    </div>
                    <div class="col-md-5 mb-3">
                      <label class="form-label" for="dimensions">Dimensions (en m²):</label>
                      <input type="number" class="form-control" id="dimensions" name="dimensions" required>

                      </select>
                    </div>
                </div>

                <div>
                    <div class="col-md-10 mx-auto mb-3 my-3">
                        <label for="fichiers">Fichiers PDF (les 7 Documents à fournir):</label>
                        <input type="file" id="fichier" name="fichiers[]" multiple class="form-control" accept="application/pdf">
                    </div>
                </div>

                <input class="submit" type="submit" placeholder="Envoyer">
            </form>
            <div id="facture"></div>
        </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        function mettreAJourFacture() {
            var commune = communeSelect.value;
            var typeBatiment = typeBatimentSelect.value;
            var niveau = niveauSelect.value;
            var dimensions = dimensionsInput.value;

            // Définition des valeurs des quittances et du timbre fiscal
            var quittanceDomaine = 5000;
            var quittanceMairie = 0; // Mettez la valeur appropriée de la quittance mairie
            var timbreFiscal = 1000;

            // Calcul du prix total en fonction des choix de l'utilisateur
            var prixTotal = 0;

            if (commune === 'Grand Yoff') {
                if (typeBatiment === 'Commercial') {
                    quittanceMairie = (800 * dimensions * niveau);
                    prixTotal = timbreFiscal + quittanceDomaine + quittanceMairie
                } else if (typeBatiment === 'Habitation') {
                    quittanceMairie = (300 * dimensions * niveau);
                    prixTotal = 1000 + quittanceDomaine + quittanceMairie
                }
            } else if (commune === 'Thiès') {
                if (typeBatiment === 'Habitation' ) {
                    quittanceMairie = (50000 * niveau);
                    prixTotal = timbreFiscal + quittanceDomaine + quittanceMairie
                } else if (typeBatiment === 'Commercial') {
                    quittanceMairie = (100000 * niveau);
                    prixTotal = timbreFiscal + quittanceDomaine + quittanceMairie
                }
            }

            // Construction de la chaîne de caractères pour afficher la facture
            var factureHTML = 'Quittance Domaine: ' + quittanceDomaine + '<br>' +
                              'Quittance Mairie: ' + quittanceMairie + '<br>' +
                              'Timbre Fiscal: ' + timbreFiscal + '<br>' +
                              'Prix Total: ' + prixTotal;

            // Affichage de la facture dans la zone appropriée
            factureContainer.innerHTML = factureHTML;
        }

        // Récupération des éléments du formulaire nécessaires aux calculs
        var communeSelect = document.getElementById('commune');
        var typeBatimentSelect = document.getElementById('type_batiment');
        var niveauSelect = document.getElementById('niveau');
        var dimensionsInput = document.getElementById('dimensions');
        var factureContainer = document.getElementById('facture');

        // Écoute des événements de changement des éléments du formulaire
        communeSelect.addEventListener('change', mettreAJourFacture);
        typeBatimentSelect.addEventListener('change', mettreAJourFacture);
        niveauSelect.addEventListener('change', mettreAJourFacture);
        dimensionsInput.addEventListener('input', mettreAJourFacture);

        // Appel initial pour afficher la facture initiale
        mettreAJourFacture();
    </script>

</body>
</html>
