<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class DemandeController extends Controller
{
    //On va définir qui nous renvoie notre page de demande
    public  function demande () {
        return view('pages.navigation.srequest');
    }

    public function facture (Request $request) {

        $commune = $request->input('commune');
        $typeBatiment = $request->input('type_batiment');
        $dimensions = $request->input('dimensions');
        $niveau = $request->input('niveau');

        $quittance_mairie = 0;
        $prix_total = 0;
        $quittance_domaine = 5000;
        $timbre_fiscal = 1000;

        if ($commune === 'Grand Yoff') {
            if ($typeBatiment === 'Commercial') {
                $quittance_mairie = $dimensions * 800 * $niveau;
                $prix_total = $timbre_fiscal + $quittance_domaine + $quittance_mairie;
            } elseif ($typeBatiment === 'Habitation') {
                $quittance_mairie = $dimensions * 300 * $niveau;
                $prix_total = $timbre_fiscal + $quittance_domaine + $quittance_mairie;
            }
        } elseif ($commune === 'Thiès') {
            if ($typeBatiment === 'Commercial') {
                $quittance_mairie = $niveau * 100000;
                $prix_total = $timbre_fiscal + $quittance_domaine + $quittance_mairie;
            } elseif ($typeBatiment === 'Habitation') {
                $quittance_mairie = $niveau * 500000;
                $prix_total = $timbre_fiscal + $quittance_domaine + $quittance_mairie;
            }
        }

        //On va envoyer la demande de paiement à Orange Money
    //     $client = new Client ();
    //     $response = $client->post('https://api.orange.com/orange-money-webpay/cm/v1/webpayment',

    //     [
    //         'headers' => [
    //             'Authorization' => 'Basic dGwyR0VReDlJMXFvYkFoSkhCa2d4RURRc2R1YWFhVDY6eWx0d2ZlbmQ3NUFualBWQQ==',
    //             'Content-Type' => 'application/json',
    //             'Accept' => 'application/json',
    //         ],
    //         'json' => [
    //             'order_id' => uniqid(), // Générez un identifiant unique pour chaque paiement
    //             'amount' => $prix_total,
    //             'return_url' => url('/confirmation-paiement'), // L'URL de confirmation de paiement sur votre site
    //         ],
    //     ]
    // );
    //  $paymentUrl = json_decode($response->getBody(), true)['payment_url'];

    return view('pages.navigation.facture',
        ['quittance_mairie' => $quittance_mairie,
        'prix_total' => $prix_total,
        'quittance_domaine' => $quittance_domaine,
        'timbre_fiscal' => $timbre_fiscal  /*, 'payment_url' => $paymentUrl*/]);

    }

    // public function paymentConfirmation (Request $request){
    //      // Valider les données du formulaire
    //      $request->validate([
    //         'phone_number' => 'required|digits:9',
    //     ]);

    //      // Valider les données du formulaire
    //      $request->validate([
    //         'phone_number' => 'required|digits:9',
    //     ]);

    //     if ($paymentStatus === 'SUCCESS') {
    //         // Paiement réussi
    //         $phoneNumber = $request->input('phone_number');
    //         $amount = $request->input('amount');
    //         $orderId = $request->input('order_id');

    //         // Enregistrement du paiement dans votre base de données
    //         $payment = new Payment();
    //         $payment->phone_number = $phoneNumber;
    //         $payment->amount = $amount;
    //         $payment->order_id = $orderId;
    //         $payment->save();

    //         // Redirection vers la page de confirmation
    //         return redirect('/confirmation');
    //     } else {
    //         // Paiement échoué ou statut inconnu
    //         return redirect()->back()->with('error', 'Le paiement a échoué. Veuillez réessayer.');
    //     }
    // }

    // private function checkPaymentStatus($orderId)
    // {
    //     // Effectuer la vérification du statut du paiement auprès d'Orange Money
    //     // et renvoyer le statut (par exemple : 'SUCCESS', 'FAILURE', 'PENDING', etc.)
    // }
}
