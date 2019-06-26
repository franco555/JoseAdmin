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
        Schema::create('Usuario_TipoDeTrabajo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('UsuarioId');
            $table->foreign('UsuarioId','fk_Usuariotipodetrabajo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            
            
            $table->unsignedInteger('TipoDeTrabajoId');
            $table->foreign('TipoDeTrabajoId','fk_Usuariotipodetrabajo_tipodetrabajo')->references('id')->on('tipoDeTrabajo')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('Usuario_TipoDeTrabajo');
    }
}
