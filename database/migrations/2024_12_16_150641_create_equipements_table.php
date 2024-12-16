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
        Schema::create('equipements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_serie');
            $table->string('designation_equipement');
            $table->string('nom_equipement');
            $table->string('type_equipement');
            $table->date('date_acq');
            $table->string('localisation_equipement');
            $table->foreignId('matricule')->constrained('agents')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipements');
    }
};
