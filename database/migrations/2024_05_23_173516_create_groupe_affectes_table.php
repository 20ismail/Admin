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
        Schema::create('groupe_affectes', function (Blueprint $table) {
            $table->id();
            $table->integer('numeroGroupe')->nullable();
            $table->integer('nbrEtudiants')->nullable();
            $table->foreignId('idComposant')->constrained('composants')->onDelete('cascade');
            $table->foreignId('idProfesseur')->constrained('professeurs')->onDelete('cascade');
            $table->foreignId('idFiliere')->constrained('filieres')->onDelete('cascade');
            // $table->foreignId('idSemestre')->constrained('semestres')->onDelete('cascade');
            $table->timestamps();
    
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_affectes');
    }
};
