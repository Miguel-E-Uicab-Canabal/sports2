<?php

use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::resource('torneos', TorneoController::class)->names('torneos');
Route::resource('participantes', ParticipanteController::class)->names('participantes');