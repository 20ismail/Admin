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
        Schema::create('salle_dispos', function (Blueprint $table) {
            $table->id();
            $table->boolean('disponibilite')->nullable();
            $table->string('jour')->nullable();
            $table->boolean('matin')->nullable();
            $table->boolean('apres_midi')->nullable();
            $table->unsignedBigInteger('idSecretaire');
            $table->foreign('idSecretaire')->references('id')->on('secretaires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle_dispos');
    }
};
