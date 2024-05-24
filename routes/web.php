<?php

use App\Http\Controllers\AdministrateurController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SalleEstController;
use App\Http\Controllers\SecretaireController;
use App\Models\Cordonateur;
use App\Models\Professeur;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('login');
})->name('');
route::Post('/login',[LoginController::class,'login'])->name('login');
route::get('/logout',[LoginController::class,'logout'])->name('logout');
route::resource('admins',AdministrateurController::class);
route::resource('salleEsts',SalleEstController::class);
route::resource('professeurs',ProfesseurController::class);
route::resource('seceretaires',SecretaireController::class);
Route::get('/Accueil', function () {
    return view('home');
})->name('home');
Route::get('/salle', function () {
    return view('salle');
})->name('salle');
Route::get('/disponibilite', function () {
    return view('dispo');
})->name('dispo');
Route::get('/enseignant', function () {
    return view('enseignant');
})->name('enseignant');
Route::get('/vacataire', function () {
    return view('vacataire');
})->name('vacataire');
Route::get('/module', function () {
    return view('module');
})->name('module');
Route::get('/filiere', function () {
    return view('filiere');
})->name('filiere');

Route::get('/secretaire', function () {
    return view('secretaire');
})->name('secretaire');