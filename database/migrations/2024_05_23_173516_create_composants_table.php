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
        Schema::create('composants', function (Blueprint $table) {
            $table->id();
            $table->string('intitule')->nullable();
            $table->integer('nbr_groupes')->nullable();
            $table->unsignedBigInteger('idfiliere')->nullable();
            $table->foreign('idfiliere')->references('id')->on('filieres')->onDelete('cascade');
            $table->unsignedBigInteger('idsemestre')->nullable();
            $table->foreign('idsemestre')->references('id')->on('semestres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composants');
    }
};
