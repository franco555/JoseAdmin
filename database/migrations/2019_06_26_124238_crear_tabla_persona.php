<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre',100);
            $table->string('Apellido',100)->nullable();
            $table->string('DNI',50)->nullable();
            $table->string('Direccion',200)->nullable();
            $table->string('Telefono',50)->nullable();
            $table->string('Email',100)->nullable();
            $table->string('Foto',200)->nullable();
            $table->dateTime('FechaInicio');
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
        Schema::dropIfExists('persona');
    }
}
