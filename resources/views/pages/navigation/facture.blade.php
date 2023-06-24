<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/facture.css')}}">
    <title>Paiement</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <img src="{{asset ('image/paiement.png')}}" alt="">

                </div>

            </div>

            <div class="facture">
                <h2>Facture</h2>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Le quittance de domaine:</th>
                            <td> {{$quittance_domaine}} <strong>FCFA</strong> </td>
                        </tr>
                        <tr>
                            <th>Le quittance Mairie:</th>
                            <td>{{$quittance_mairie}} <strong>FCFA</strong> </td>
                        </tr>
                        <tr>
                            <th>Le Timbre fiscale:</th>
                            <td> {{$timbre_fiscal}} <strong>FCFA</strong> </td>
                        </tr>
                        <tr>
                            <th>Montant total à payer:</th>
                           <td> {{$prix_total}} <strong>FCFA</strong> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <div class="back">
        <a href="{{route('soumettre une demande')}}">
            <button type="button" class="btn btn-danger">Anuler</button>
        </a>

        <a href="{{route('suivis du statut')}}">
            <button type="botton" class="btn btn-success">Accepter</button>
        </a>
    </div>

</body>
</html>

