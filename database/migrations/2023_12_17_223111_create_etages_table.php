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
        Schema::create('etages', function (Blueprint $table) {
            $table->id('id_etage');
            $table->string('nom_etage');
            $table->unsignedBigInteger('id_local');

            // Clé étrangère correctement formée
            $table->foreign('id_local')->references('id_local')->on('locals')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etages');
    }
};
