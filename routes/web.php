<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\administrationController;
use App\Http\Controllers\reclamationController;

Route::get('/', function () {
    return view('index');
});

//Cette route nous permet d'appeler la fonction qui se trouve dans le etudiantCOntroller qui a pour but de retourner une vue
Route::get('loginEtudiant', [etudiantController::class, 'retourneLogin']);

//on demande au serveur de nous retourner la vue loginAdministration
Route::get('loginAdministration', [administrationController::class, 'retourneLogin']);

//on verifie si les infos sont conformes avec celles de la base de donnee avant de retourner la vue tbEtudiant
Route::post('loginEtudiant', [etudiantController::class, 'tableau_bord']);

//on verifie si les infos sont conformes avec celles de la base de donnee avant de retourner la vue tbAdminstration de meme que toutes les infos qui se trouvent dans la vue reclamation
Route::post('loginAdministration', [administrationController::class, 'tableau_bord']);

//on enregistre les informations dans la base de donnee
Route::get('tbEtudiant', [reclamationController::class, 'saveData']);
