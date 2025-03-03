<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\Reservation;
use Illuminate\Validation\ValidationException;

class BookingManager extends Component
{
    public $start_date, $end_date, $property_id;
    public $properties;

    public function mount()
    {
        // Récupérer toutes les propriétés disponibles
        $this->properties = Property::all();
    }

    public function submitReservation()
    {
        // Validation des champs saisi
        $validatedData = $this->validate([
            'property_id' => 'required|exists:properties,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Création de la réservation
        $reservation = Reservation::create($validatedData);

        // Message de succès
        session()->flash('success', 'Réservation confirmée !');

        // Redirige vers la page de la propriété réservée
        return redirect()->route('properties.show', ['id' => $this->property_id]);
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}