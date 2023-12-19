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
        Schema::create('seances', function (Blueprint $table) {

            $table->id('id_seance'); // Utilise 'id_seance' comme clé primaire
            $table->string('titre_seance');
            $table->time('debut');
            $table->time('fin');
            $table->unsignedBigInteger('id_jour');
            $table->unsignedBigInteger('id_groupe');
            $table->unsignedBigInteger('id_prof');
            $table->unsignedBigInteger('id_matiere');
            $table->unsignedBigInteger('id_sem');
            $table->string('code_salle');
            $table->unsignedBigInteger('id_type');

            // Clés étrangères
            $table->foreign('id_jour')->references('id')->on('jours')->onDelete('cascade');
            $table->foreign('id_groupe')->references('id')->on('groupes')->onDelete('cascade');
            $table->foreign('id_prof')->references('id_prof')->on('profs')->onDelete('cascade');
            $table->foreign('id_matiere')->references('id_matiere')->on('matieres')->onDelete('cascade');
            $table->foreign('id_sem')->references('id_sem')->on('semestres')->onDelete('cascade');
            $table->foreign('code_salle')->references('code_salle')->on('salles')->onDelete('cascade');
            $table->foreign('id_type')->references('id')->on('types')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};
