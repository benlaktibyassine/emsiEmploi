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
        Schema::create('disponibilite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prof');
            $table->unsignedBigInteger('id_jour');
            $table->time("heure_debut");
            $table->time("heure_fin");
            $table->foreign("id_prof")->references("id_prof")->on("profs")->onDelete("cascade");
            $table->foreign("id_jour")->references("id")->on("jours")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilite');
    }
};
