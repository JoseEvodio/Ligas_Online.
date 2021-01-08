<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre_del_Equipo');
            $table->string('Liga_Origen');
            $table->string('Partidos_Jugados');
            $table->string('Victorias');
            $table->string('Empates');
            $table->string('Derrotas');
            $table->string('Puntaje');
            $table->string('Jugadores_Amonestados');
            $table->string('Jugadores_Expulsados');

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
        Schema::dropIfExists('ligas');
    }
}
