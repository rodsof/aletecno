<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id_mascota');
            $table->string('nombre',45);
            $table->string('especie',45);
            $table->string('raza',45);
            $table->boolean('sexo');
            $table->string('color',20);
            $table->string('nombre_imagen',150)->nullable();
            $table->unsignedInteger('id_usuario');
            $table->decimal('peso',4,2);
            $table->unsignedInteger('id_pelaje');
            $table->unsignedInteger('id_talla');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_talla')->references('id_talla')->on('tallas');
            $table->foreign('id_pelaje')->references('id_pelaje')->on('pelajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
