<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermisDeConstruireController extends Controller
{
    //
    public  function srequest () {
        return view('pages.navigation.srequest');
    }


    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            // Définir les règles de validation pour chaque champ du formulaire
        ]);

        // Enregistrer les données dans la base de données
        PermisDeConstruire::create([
            // Mapper les champs du formulaire aux colonnes de la table de la base de données
        ]);

        // Rediriger l'utilisateur vers une page de confirmation
        return redirect()->route('demande-permis-construire')->with('success', 'Votre demande de permis de construire a été soumise avec succès !');
    }
}
