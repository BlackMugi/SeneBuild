<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\Admin\Postcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


/*
|--------------------------------------------------------------------------
| Les routes des pages qui se trouve dans notre Barre de Navigation
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('accueil');


//  Route pour Notre page à propos
Route::get('/about', function () {
    return view('pages.navigation.about');
})->name('à propos');


//  Route pour notre page aide & assistance
Route::get('/help', function () {
    return view('pages.navigation.help');
})->name('aide & assistance');


//  Route pour notre page soumettre une demande
Route::middleware(['auth'])->group(function () {
    Route::get('/srequest', [DemandeController::class, 'requete'])->name('soumettre une demande');
    Route::post('/srequest', [DemandeController::class, 'demande'])->name('demande');
    Route::get('/status', [DemandeController::class, 'suivis'])->name('suivis du statut');
    Route::get('/ressources_pdf', [DemandeController::class, 'ressources'])->name('ressources');

    Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::resource('post',Postcontroller::class);
        Route::get('/admin_dashboard', [PostController::class, 'admin_dashboard'])->name('admin_dashboard');
        Route::get('/role', [PostController::class, 'role'])->name('role');
        Route::get('/demandes', [PostController::class, 'demandes'])->name('demandes');
        Route::get('/demandes-acceptees', [PostController::class, 'demandes_acceptées'])->name('demandes_acceptees');
        Route::get('/demandes-refusees', [PostController::class, 'demandes_refusées'])->name('demandes_refusees');
        Route::get('/demandes-en-cours', [PostController::class, 'demandes_en_cours'])->name('demandes_en_cours');

        // Les Routes de ce middleware pour Update le compte de l'utilisateurs
        Route::get('/update_role/{id}', [PostController::class, 'update_role'])->name('update_role');
        Route::post('/up_role', [PostController::class, 'up_role'])->name('up_role');

        // Les Routes de ce middleware pour Update les donées de demandes
        Route::get('/update_demande/{id}', [PostController::class, 'update_demande'])->name('update_demande');
        Route::post('/up_demande', [PostController::class, 'up_demande'])->name('up_demande');


        //Route pour Télécharger le fichier PDF Stocké dans la base de donnée
        Route::get('/download/{id}', [PostController::class, 'download'])->name('download');

        //Route pour Affiché le Montant Total
        Route::get('/montant_total', [PostController::class, 'comission'])->name('comission');

        //Route pour Affiché le Montant du Jour
        Route::get('/montant_du_jour', [PostController::class, 'daily_comission'])->name('comission du jour');
    });
});
require __DIR__.'/auth.php';





// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


/*
|--------------------------------------------------------------------------
| Nous allons définir les routes qui se trouvent au niveau du footer de
| de notre application
|--------------------------------------------------------------------------
|
*/

//  Route pour Notre page document à fournir
Route::get('/document', function () {
    return view('pages.footer.ressources');
})->name('ressources outiles');;


//  Route pour Notre page faq
Route::get('/faq', function () {
    return view('pages.footer.faq');
})->name('faq');;


//  Route pour Notre pagemention légale
Route::get('/mention', function () {
    return view('pages.footer.mention');
})->name('mention légale');;


//  Route pour Notre page politique de confidentialité
Route::get('/politique', function () {
    return view('pages.footer.politique');
})->name('politique de confidentialité');;


//  Route pour Notre page sommes nous
Route::get('/qui-sommes-nous', function () {
    return view('pages.footer.qui-sommes-nous');
})->name('qui sommes nous');

//  Route pour Notre page sommes nous



// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';


