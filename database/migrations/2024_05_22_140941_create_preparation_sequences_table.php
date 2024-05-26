<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreparationSequencesTable extends Migration
{
    public function up()
    {
        Schema::create('preparation_sequences', function (Blueprint $table) {
            $table->id();
            $table->string('preparation')->unique();
            $table->time('heure');
            $table->integer('entier');
            $table->string('type_espace_formation', 200);
            $table->string('objectif_sequence', 200);
            $table->text('contenu_rappel');
            $table->integer('duree_rappel');
            $table->text('motivation');
            $table->integer('duree_motiv');
            $table->text('plan');
            $table->integer('duree_plan');
            $table->text('developpement1');
            $table->string('mthod_pedagog_dev1', 200);
            $table->integer('duree_dev1');
            $table->text('developpement2');
            $table->string('mthod_pedagog_dev2', 200);
            $table->integer('duree_dev2');
            $table->text('developpement3');
            $table->string('mthod_pedagog_dev3', 200);
            $table->integer('duree_dev3');
            $table->text('synthese');
            $table->integer('duree_synthese');
            $table->text('evaluation');
            $table->integer('duree_evaluation');
            $table->text('connexion');

            // Foreign keys
            $table->foreignId('module_id')->constrained('modules')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preparation_sequences');
    }
}
