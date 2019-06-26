<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRolusuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolusuario', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('rol_id');
            $table->unsignedInteger('usuario_id');
            
            $table->foreign('rol_id')->references('id')->on('rol');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rolusuario');
    }
}
