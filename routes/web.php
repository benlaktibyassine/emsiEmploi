<?php

use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\GroupeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('locales', LocalController::class)->names(
    [
        "index" => "local.index",
        "create" => "local.create",
        "store" => "local.store",
        "show" => "local.show",
        "edit" => "local.edit",
        "update" => "local.update",
        "destroy" => "local.destroy",
    ]
);
Route::resource('salles', SalleController::class)->names(
    [
        "index" => "salle.index",
        "create" => "salle.create",
        "store" => "salle.store",
        "show" => "salle.show",
        "edit" => "salle.edit",
        "update" => "salle.update",
        "destroy" => "salle.destroy",
    ]
);
Route::middleware(['auth.prof'])->group(function () {

    Route::resource('profs', ProfController::class)->names([
        "index" => "profindex",
        "create" => "profcreate",
        "store" => "profstore",
        "show" => "profshow",
        "edit" => "profedit",
        "update" => "profupdate",
        "destroy" => "profdestroy",
    ]);
    Route::resource('matieres', MatiereController::class)->names(
        [
            'index' => 'matiere.index',
            'create' => 'matiere.create',

            "store" => "matiere.store",
            "show" => "matiere.show",
            "edit" => "matiere.edit",
            "update" => "matiere.update",
            "destroy" => "matiere.destroy"
        ]
    );
    Route::resource('jours', JourController::class)->names(
        [
            'index' => 'jour.index',
            'create' => 'jour.create',

            "store" => "jour.store",
            "show" => "jour.show",
            "edit" => "jour.edit",
            "update" => "jour.update",
            "destroy" => "jour.destroy"
        ]
    );
});

Route::middleware(['auth.prof'])->group(function () {

    Route::get('/log', function () {
        return view("log");
    })->name("log");
});

Route::post('/login', [ProfController::class, 'login'])->name("proflogin");
Route::post('/logout', [ProfController::class, 'logout'])->name('proflogout');


Route::resource('groupes', GroupeController::class)->names(
    [
        "index" => "groupe.index",
        "create" => "groupe.create",
        "store" => "groupe.store",
        "show" => "groupe.show",
        "edit" => "groupe.edit",
        "update" => "groupe.update",
        "destroy" => "groupe.destroy",
    ]
);
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::fallback(function () {
    return view('home'); // You can customize this to your needs
});
