<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocutoresEstilosMusicaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locutores_estilos_musicais', function (Blueprint $table) {
            $table->bigInteger('locutor_id')->unsigned();
            $table->bigInteger('estilo_musical_id')->unsigned();
            $table->foreign('locutor_id')->references('id')->on('locutores');
            $table->foreign('estilo_musical_id')->references('id')->on('estilos_musicais');
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
        Schema::dropIfExists('locutores_estilos_musicais');
    }
}
