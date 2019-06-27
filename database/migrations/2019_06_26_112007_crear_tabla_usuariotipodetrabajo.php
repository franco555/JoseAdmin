<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioTipodetrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariotipodetrabajo', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('tipodetrabajo_id');            
            
            //$table->foreign('usuario_id')->references('id')->on('usuario');
            //$table->foreign('tipodetrabajo_id')->references('id')->on('tipodetrabajo');
            
        });

        Schema::table('usuariotipodetrabajo', function($table)
        {
            //$table->foreign('usuario_id')->references('usuario')->on('id');
            //$table->foreign('tipodetrabajo_id')->references('tipodetrabajo')->on('id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->foreign('tipodetrabajo_id')->references('id')->on('tipodetrabajo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariotipodetrabajo');
    }
}
