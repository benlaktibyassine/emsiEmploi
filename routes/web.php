<?php

use App\Http\Controllers\ProfController;
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

Route::resource('profs', ProfController::class)->names([
    "index" => "profindex",
    "create" => "profcreate",
    "store" => "profstore",
    "show" => "profshow",
    "edit" => "profedit",
    "update" => "profupdate",
    "destroy" => "profdestroy",
]);

Route::post('/login', [ProfController::class, 'login'])->name("proflogin");
Route::post('/logout', [ProfController::class, 'logout'])->name('logout');
Route::get('/log', function () {
    return view("log");
})->name("log");
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
