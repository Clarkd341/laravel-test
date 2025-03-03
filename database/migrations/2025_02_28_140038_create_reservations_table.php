<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Exécute la migration pour créer la table des réservations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // Identifiant unique pour chaque réservation
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Propriété liée à la réservation
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Utilisateur lié à la réservation (facultatif)
            $table->date('start_date'); // Date de début de la réservation
            $table->date('end_date'); // Date de fin de la réservation
            $table->timestamps(); // Crée les colonnes created_at et updated_at
        });
    }

    /**
     * Annule la migration pour supprimer la table des réservations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations'); // Supprime la table des réservations
    }
}
