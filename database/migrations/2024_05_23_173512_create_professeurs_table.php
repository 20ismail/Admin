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
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->integer('heuresEnseignementAnnee');
            $table->string('image')->nullable();
            $table->string('nom');
            $table->string('prenom')->nullable();;
            $table->string('email')->unique();
            $table->string('numTelephone')->nullable(); // Ajout de nullable
            $table->string('password')->nullable();;
            $table->string('type')->nullable(); // Ajout de nullable
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_departement');
            // Foreign keys
            $table->foreign('id_admin')->references('id')->on('administrateurs')->onDelete('cascade');
            $table->foreign('id_departement')->references('id')->on('departements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professeurs');
    }
};
