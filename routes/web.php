<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//ROTTA PER VEDERE IL FORM
Route::get('/crea/gioco', [GameController::class, 'create'])->name('games.create');