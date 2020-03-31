<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',45);
            $table->string('apellido',45);
            $table->string('password');
            $table->string('dni',10)->unique();
            $table->string('calle',45);
            $table->string('numero',10);
            $table->string('cuit_cuil',11)->nullable();
            $table->string('tel_fijo',10)->nullable();
            $table->string('tel_celular',15)->nullable();
            $table->unsignedInteger('id_localidad');
            $table->boolean('administrador')->default(0);
            $table->foreign('id_localidad')->references('id_localidad')->on('localidades');
            $table->rememberToken()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
