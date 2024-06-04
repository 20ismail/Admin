<?php

use App\Http\Controllers\AdministrateurController;

use App\Http\Controllers\DisponibiliteProfController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SalleEstController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\VacataireController;
use App\Models\Cordonateur;
use App\Models\disponibilite_prof;
use App\Models\Professeur;
use Illuminate\Support\Facades\Route;
// Route::put('/modules/{cycle}/{niveau}', [ModuleController::class, 'updat'])->name('modules.updat');


// Route::put('/modules/{module}', [ModuleController::class, 'update'])->name('modules.update');


// Définir la route pour la suppression
// Route::get('/delete', [ModuleController::class, 'delete'])->name('delete.module');



Route::get('/vacataire', [vacataireController::class, 'index'])->name('vacataire.index');
Route::post('/vacataire', [vacataireController::class, 'store'])->name('vacataire.store');
Route::get('/vacataire/{id}/edit', [vacataireController::class, 'edit'])->name('editVacataire');
Route::put('/vacataire/{id}', [vacataireController::class, 'update'])->name('vacataire.update');
Route::delete('/vacataire/{id}', [vacataireController::class, 'destroy'])->name('vacataire.destroy');

Route::get('/enseignant', [ProfesseurController::class, 'index'])->name('enseignant.index');
Route::post('/enseignant', [ProfesseurController::class, 'store'])->name('enseignant.store');
Route::get('/enseignant/{id}/edit', [ProfesseurController::class, 'edit'])->name('editEnseignant');
Route::put('/enseignant/{id}', [ProfesseurController::class, 'update'])->name('enseignant.update');
Route::delete('/enseignant/{id}', [ProfesseurController::class, 'destroy'])->name('enseignant.destroy');
Route::get('/', function () {
    return view('login');
})->name('');
route::Post('/login',[LoginController::class,'login'])->name('login');
route::get('/logout',[LoginController::class,'logout'])->name('logout');
// route::get('/dispo',[disponibilite_prof::class,'test'])->name('disponibilite.test');
route::resource('administrateurs',AdministrateurController::class);
route::resource('salleEsts',SalleEstController::class);
// route::resource('professeurs',ProfesseurController::class);
// route::resource('seceretaires',SecretaireController::class);
route::resource('modules',ModuleController::class);
route::resource('Disponibilite_profs',DisponibiliteProfController::class);
route::resource('filieres',FiliereController::class);
route::resource('semestres',SemestreController::class);
Route::get('/Accueil', function () {
    return view('home');
})->name('home');
Route::get('/salle', function () {
    return view('salle');
})->name('salle');
Route::get('/disponibilite', function () {
    return view('dispo');
})->name('dispo');
// Route::get('/enseignant', function () {
//     return view('enseignant');
// })->name('enseignant');
// Route::get('/vacataire', function () {
//     return view('vacataire');
// })->name('vacataire');
// Route::get('/module', function () {
//     return view('module');
// })->name('module');
Route::get('/filiere', function () {
    return view('filiere');
})->name('filiere');

// Route::get('/secretaire', function () {
//     return view('secretaire');
// })->name('secretaire');

Route::get('/secretaires', [SecretaireController::class, 'index'])->name('seceretaires.index');
Route::post('/secretaires', [SecretaireController::class, 'store'])->name('seceretaires.store');
Route::put('/secretaires/{id}', [SecretaireController::class, 'update'])->name('seceretaires.update');
// Route::delete('/secretaires/{id}', [SecretaireController::class, 'destroy'])->name('seceretaires.destroy');
//Route::get('/secretaires/{id}/edit', [SecretaireController::class, 'edit'])->name('seceretaires.edit');
Route::get('/secretaires/{id}/edit', [SecretaireController::class, 'edit'])->name('secretaireEdit');
Route::delete('/secretaires/{id}', [SecretaireController::class, 'destroy'])->name('seceretaires.destroy');