<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateBuzonDeSugerenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buzon_de_sugerencias', function (Blueprint $table) {
            $table->bigIncrements('id_sugerencias');
            $table->string('titulo')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('area')->nullable();
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
        Schema::dropIfExists('buzon_de_sugerencias');
    }
}
