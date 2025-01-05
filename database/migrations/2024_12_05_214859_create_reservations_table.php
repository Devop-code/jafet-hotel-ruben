<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom du client
            $table->string('email'); // Email du client
            $table->string('profession'); // Profession du client
            $table->string('pays_residence'); // Pays de résidence
            $table->date('date_naissance'); // Date de naissance
            $table->integer('nombre_personnes'); // Nombre de personnes
            $table->date('date_entree'); // Date d'entrée
            $table->date('date_sortie'); // Date de sortie
            $table->string('type_chambre'); // Type de chambre
            $table->decimal('prix')->default(null); // Prix de la réservation
            $table->string('voiturier'); // Option voiturier (oui/non)
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}

?>