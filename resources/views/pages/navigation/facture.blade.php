<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('assets/facture.css')}}">
    <title>Paiement</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <img src="{{asset ('image/orange-money.png')}}" alt="">

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="{{ asset('image/senegal-flag.png') }}" alt="Sénégal" width="16" height="12">
                            +221
                        </span>
                    </div>
                    <input type="number" name="numero_telephone" id="phone_number" class="form-control" placeholder="Num :">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary mb-3" value="Payer">
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
            <img class="back-button" src="{{asset('icon/back.png')}}" alt="">
        </a>
    </div>
</body>
</html>

