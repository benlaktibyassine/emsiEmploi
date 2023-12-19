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
        Schema::create('reseau', function (Blueprint $table) {
            $table->id('id_reseau'); // Utilise 'id_reseau' comme clé primaire
            $table->string('lien');
            $table->unsignedBigInteger('id_treseau');
            $table->unsignedBigInteger('id_prof');

            // Clés étrangères
            $table->foreign('id_treseau')->references('id_treseau')->on('type_reseau')->onDelete('cascade');
            $table->foreign('id_prof')->references('id_prof')->on('profs')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseau');
    }
};
