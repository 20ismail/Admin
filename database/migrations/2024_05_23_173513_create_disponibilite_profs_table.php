<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('disponibilite_profs', function (Blueprint $table) {
            $table->id();
            $table->date('jour')->nullable();
            $table->boolean('matin')->nullable();
            $table->boolean('apres_midi')->nullable();
            $table->unsignedBigInteger('id_prof'); // Ajout de nullable
            $table->unsignedBigInteger('id_semestre');

            // Ajout de la clé étrangère avec contrainte de suppression en cascade
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');
            $table->foreign('id_semestre')->references('id')->on('semestres')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilite_profs');
    }
};
