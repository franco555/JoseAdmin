<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Email',60);
            $table->string('clave',50);

            $table->unsignedInteger('persona_id');
            //$table->foreign('persona_id')->references('id')->on('persona');            
        
        });

        Schema::table('usuario', function($table)
        {
            //$table->foreign('persona_id')->references('persona')->on('id');
            $table->foreign('persona_id')->references('id')->on('persona'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
