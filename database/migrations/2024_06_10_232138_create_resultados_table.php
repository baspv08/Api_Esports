<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('anotaciones')->default(0);
            $table->unsignedBigInteger('partido_id');
            $table->unsignedBigInteger('equipo_ganador_id')->nullable(false);
            $table->unsignedBigInteger('equipo_perdedor_id')->nullable(false);

            $table->foreign('partido_id')->references('id')->on('partidos');
            $table->foreign('equipo_ganador_id')->references('id')->on('equipos');
            $table->foreign('equipo_perdedor_id')->references('id')->on('equipos');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
};
