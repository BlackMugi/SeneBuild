<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('assets/srequest.css')}}">
    <title>Faire une demande</title>
</head>
<body>

    <section class="draft">
        <img src="{{asset ('image/building-permit.png')}}" alt="">

        <div class="form">
            <h1>Faire une demande</h1>

            <form method="POST" action="/srequest" enctype="multipart/form-data">
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
                        <option value="RDC">Commercial</option>
                        <option value="R+1">Habitation</option>
                      </select>
                    </div>
                    <div class="col-md-5 mb-3">
                      <label class="form-label" for="commune">Commune:</label>
                      <select id="commune" class="form-select" name="commune" required>
                        <option disabled selected hidden>--Choisir--<p class="text-secondary fst-italic"></p></option>
                        <option value="Dakar">Grand Yoff</option>
                        <option value="Thies">Thies</option>
                      </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                      <label class="form-label" for="niveau">Niveau:</label>
                      <select class="form-select" id="niveau" name="niveau" required>
                        <option disabled selected hidden><p class="text-secondary">--Choisir--</p></option>
                        <option value="RDC">RDC</option>
                        <option value="R+1">R+1</option>
                        <option value="R+2">R+2</option>
                        <option value="R+3">R+3</option>
                        <option value="R+4">R+4</option>
                        <option value="R+5">R+5</option>
                        <option value="R+6">R+6</option>
                        <option value="R+7">R+7</option>
                        <option value="R+8">R+8</option>
                        <option value="R+9">R+9</option>
                        <option value="R+10">R+10</option>
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
                      <input type="file" id="fichier1" name="fichiers[]" multiple class="form-control" accept="application/pdf">
                    </div>
                </div>

                <input class="submit" type="submit" placeholder="Envoyer">
            </form>
        </div>

    </section>

</body>
</html>
