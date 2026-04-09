<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\GroupeController;

Route::get('/', function () {
    return redirect()->route('etudiants.index');
});

Route::resource('etudiants', EtudiantController::class);
Route::resource('groupes', GroupeController::class);