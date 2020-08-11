<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_baosem')->nullable();
            $table->date('date_parution_reel');
            $table->string('code_annonceur', 255)->nullable();
            $table->foreign('code_annonceur',255)->references('code_annonceur')->on('annonceurs');
            $table->integer('code_langue')->nullable();
            $table->foreign('code_langue')->references('code_langue')->on('langues');
             $table->string('code_rubrique')->nullable();
            $table->integer('code_nature')->nullable();
            $table->foreign('code_nature')->references('code_nature')->on('natures');
            $table->integer('id_version')->nullable();
            $table->foreign('id_version')->references('id')->on('versions');
            $table->string('ref_montage')->nullable();
            $table->string('num_insertion')->nullable();
            $table->string('titre')->nullable();
            $table->text('texte')->nullable();
            $table->float('surface_reel_bloc')->nullable(); 
            $table->boolean('encours')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
