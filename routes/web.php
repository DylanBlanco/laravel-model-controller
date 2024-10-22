<?php

use App\Http\Controllers\Guest\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index']);

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
