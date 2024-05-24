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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('intitule')->nullable();
            $table->integer('heuresCours')->nullable();
            $table->integer('heuresTD')->nullable();
            $table->integer('heuresTP')->nullable();
            $table->string('niveau')->nullable();
            
            // Foreign keys
            $table->unsignedBigInteger('id_prof');
            $table->unsignedBigInteger('id_semestre');
            $table->unsignedBigInteger('id_filiere');
        
            // Define foreign key constraints
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');
            $table->foreign('id_semestre')->references('id')->on('semestres')->onDelete('cascade');
            $table->foreign('id_filiere')->references('id')->on('filieres')->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
