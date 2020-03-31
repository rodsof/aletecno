<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            $table->increments('id_vacuna');
            $table->string('marca',45);
            $table->string('serie',45);
            $table->unsignedInteger('id_mascota');
            $table->foreign('id_mascota')->references('id_mascota')->on('mascotas');
            $table->date('fecha_vacunacion')->useCurrent();
            $table->date('fecha_revacunacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacunas');
    }
}
