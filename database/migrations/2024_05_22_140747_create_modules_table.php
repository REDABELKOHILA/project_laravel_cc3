<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('code_module', 10)->unique();
            $table->string('libelle_module' , 150);
            $table->integer('masse_hor_presentielle');
            $table->integer('masse_hor_distantielle');
            $table->string('bilan_compet_module',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
