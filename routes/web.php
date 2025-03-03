<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

// Route pour afficher la page d'accueil avec le formulaire de réservation
Route::get('/', [PropertyController::class, 'index'])->name('properties.index');

// Route pour afficher une propriété spécifique après réservation
Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('properties.show');
