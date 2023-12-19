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
        Schema::create('salles', function (Blueprint $table) {
            $table->string('code_salle')->primary(); // Utilise 'code_salle' comme clé primaire
            $table->unsignedBigInteger('id_etage');
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_etage')->references('id_etage')->on('etages')->onDelete('cascade');
            $table->foreign('id_type')->references('id')->on('types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salles');
    }
};
