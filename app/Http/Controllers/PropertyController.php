<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // Méthode pour afficher la page d'accueil
    public function index()
    {
        //  app.blade.php
        return view('layouts.app'); 
    }

    // Afficher une propriété spécifique
    public function show($id)
    {
        // Trouver la propriété par ID
        $property = Property::findOrFail($id);

        // Retourner la vue avec les informations de la propriété
        return view('properties.show', compact('property'));
    }
}