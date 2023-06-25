<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Requete;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class DemandeController extends Controller
{
    // On va définir qui nous renvoie notre page de demande
    public function requete()
    {
        return view('pages.navigation.srequest');
    }


    public function demande(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'telephone' => 'nullable|numeric',
            'type_batiment' => 'required',
            'commune' => 'required',
            'niveau' => 'required',
            'dimensions' => 'required|numeric',
            'fichiers' => 'required|array|min:7|max:7',
            'fichiers.*' => 'required|mimes:pdf',
        ]);

        $prenom = $request->input('prenom');
        $nom = $request->input('nom');
        $telephone = $request->input('telephone');
        $type_batiment = $request->input('type_batiment');
        $commune = $request->input('commune');
        $niveau = $request->input('niveau');
        $dimensions = $request->input('dimensions');

        if ($request->hasFile('fichiers')) {
            $files = $request->file('fichiers');
            $pdf = [];

            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->storeAs('pdf', $filename);
                $pdf[] = $filename;
            }

        }
        $json_pdf = json_encode($pdf);

        // Déclaration des variables pour notre algorithme de facturation
        $quittance_mairie = 0;
        $quittance_domaine = 5000;
        $timbre_fiscal = 1000;

        if ($commune === 'Grand Yoff') {
            if ($type_batiment === 'Commercial') {
                $quittance_mairie = $dimensions * 800 * $niveau;
            } elseif ($type_batiment === 'Habitation') {
                $quittance_mairie = $dimensions * 300 * $niveau;
            }
        } elseif ($commune === 'Thiès') {
            if ($type_batiment === 'Commercial') {
                $quittance_mairie = $niveau * 100000;
            } elseif ($type_batiment === 'Habitation') {
                $quittance_mairie = $niveau * 50000;
            }
        }

        $prix_total = $timbre_fiscal + $quittance_domaine + $quittance_mairie;

        $requete = new Requete();
        $requete->prenom = $prenom;
        $requete->nom = $nom;
        $requete->telephone = $telephone;
        $requete->type_batiment = $type_batiment;
        $requete->commune = $commune;
        $requete->niveau = $niveau;
        $requete->dimensions = $dimensions;
        $requete->fichier_pdf = $json_pdf;
        $requete->prix_total = $prix_total;
        $requete->user_id = auth()->id();
        $requete->save();

        $requetes = Requete::where('user_id', auth()->id())->get();

        return redirect()->route('suivis du statut')->with('requetes', $requetes);

    }

    public function suivis (){

        $requetes = Requete::where('user_id', auth()->id())->get();

        return view('pages.navigation.status', compact('requetes'));

    }

    public function ressources(){
        
        $filePath = Storage::path('public/pdf/Ressources.pdf');
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return Response::download($filePath, 'Ressources.pdf', $headers);
    }
}


