<?php

use App\Http\Controllers\ProfileController;
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
})->name('à propos');;


//  Route pour notre page aide & assistance
Route::get('/help', function () {
    return view('pages.navigation.help');
})->name('aide & assistance');;


//  Route pour notre page soumettre une demande
Route::get('/srequest', function () {
    return view('pages.navigation.srequest');
})->name('soumettre une demande');;


//  Route pour notre page suivis du status
Route::get('/status', function () {
    return view('pages.navigation.status');
})->name('suivis du statut');;


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
})->name('qui sommes nous');;

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
