<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController; // <--- ASEGÚRATE DE QUE ESTO ESTÉ AQUÍ

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ofertas', OfertaController::class);