<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesparasitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desparasitaciones', function (Blueprint $table) {
            $table->increments('id_desparasitacion');
            $table->string('marca',45)->nullable();
            $table->string('dosis',45);
            $table->unsignedInteger('id_mascota');
            $table->date('fecha_desparasitacion')->useCurrent();
            $table->date('fecha_renovacion')->nullable();
            $table->foreign('id_mascota')->references('id_mascota')->on('mascotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desparasitaciones');
    }
}
