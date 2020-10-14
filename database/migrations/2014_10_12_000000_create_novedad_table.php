<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovedadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedad', function (Blueprint $table) {
            $table->bigIncrements('id_novedad');
            $table->string('area');
            $table->date('fecha');
            $table->string('novedad');
            $table->string('descripcion');
            $table->string('estado');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novedad');
    }
}
