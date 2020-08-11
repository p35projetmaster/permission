<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::create('localisations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom', 255);
            $table->string('city', 255);
            $table->double('lat', 8, 2);
            $table->double('lng', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /** Schema::dropIfExists('localisations');*/
    }
}
