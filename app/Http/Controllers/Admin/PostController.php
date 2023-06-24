<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Requete;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use ZipArchive;
use Carbon\Carbon;

class PostController extends Controller
{

    // La page d'accueil de notre compte administrateur
    public function index()
    {
        $requetes = Requete::all();
        return view ('admin.post.index', compact('requetes'));
    }


    // Le Tableau de Board
    public function admin_dashboard()
    {
        // Pour calculer la totalité de ce qu'on a gagné
        $sommePrixTotal = Requete::sum('prix_total');

        //Pour calculer la totalité de ce qu'on a gagné en ces dergnier 24H
        $dateAujourdhui = Carbon::now()->format('Y-m-d');
        $sommePrixTotal1 = Requete::whereDate('created_at', $dateAujourdhui)->sum('prix_total');

        //Pour le nombre d'utilisateur
        $nbruser = User::count();

        //Pour le nombre d'utilisateur
        $nbrrequete = Requete::count();

        //Pour le nombre d'utilisateur
        $nbruserreq = User::has('requete')->count();

        // Calcul du pourcentage
        $pourcentage = ($nbruserreq / $nbruser) * 100;

        return view ('admin.post.admin_dashboard', compact('sommePrixTotal',
                                                           'sommePrixTotal1',
                                                           'nbruser',
                                                           'nbrrequete',
                                                           'pourcentage'));
    }

    // Les Roles
    public function role()
    {
        $users = User::all();
        return view ('admin.post.roles', compact('users'));
    }

    /**
     * Modification du compte utilisateur.
     */
    // Par affecter des roles
    public function update_role($id)
    {
        $users = User::find($id);
        return view ('admin.post.update.up_role', compact('users'));
    }

    public function up_role(Request $request)
    {
        $request->validate([
            'is_admin' => 'required',
        ]);

        $users = User::all();
        $user = User ::find($request->id);
        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> is_admin = $request->is_admin;
        $user-> update();

        return redirect()->route('admin.role')->with('users', $users);
    }

    // Listes de tout les demandes
    public function demandes()
    {
        $requetes = Requete::all();
        return view ('admin.post.demandes', compact('requetes'));
    }

    // Listes des demandes acceptées
    public function demandes_acceptées()
    {
        $requetes = Requete::where('statut', 'Accepté')->get();
        return view ('admin.post.demandes-acceptées', compact('requetes'));
    }


    // Listes des demandes en Refusées
    public function demandes_refusées()
    {
        $requetes = Requete::where('statut', 'Refusé')->get();
        return view ('admin.post.demandes-rejetées', compact('requetes'));
    }


    // Affichage de la listes des demandes en cours
    public function demandes_en_cours()
    {
        $requetes = Requete::where('statut', 'en cours')->get();
        return view ('admin.post.demandes-en-cours', compact('requetes'));
    }

    /**
     * Traitement des demandes en cours.
     */

    public function update_demande($id)
    {
        $requetes = Requete::find($id);
        return view ('admin.post.update.up_demande', compact('requetes'));
    }

    public function up_demande(Request $request)
    {
        $request->validate([
            'statut' => 'required',
        ]);

        $requetes = Requete::all ();
        $requete = Requete::find($request->id);
        $requete-> statut = $request->statut;
        $requete-> update();

        return redirect()->route('admin.role')->with('requetes', $requetes);
    }


    // Fontion pour télécharger les fichier pdf
    public function download($id)
    {
        $requete = Requete::findOrFail($id);
        $fichiersPDF = json_decode($requete->fichier_pdf);

        // Créer un fichier ZIP pour regrouper les fichiers PDF
        $zipFileName = 'fichiers_pdf.zip';
        $zip = new ZipArchive();
        $zip->open($zipFileName, ZipArchive::CREATE);

        // Ajouter chaque fichier PDF au ZIP
        foreach ($fichiersPDF as $pdf) {
            $filePath = 'pdf/' . $pdf;
            if (Storage::exists($filePath)) {
                $zip->addFile(storage_path('app/' . $filePath), $pdf);
            }
        }

        $zip->close();

        // Envoyer le fichier ZIP en téléchargement
        return response()->download($zipFileName)->deleteFileAfterSend(true);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
