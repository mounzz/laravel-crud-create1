<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', [PokemonController::class, 'Welcome']);
Route::post('/create',[PokemonController::class,'store']);
