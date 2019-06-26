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
        Schema::create('usuario_TipoDeTrabajo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('usuarioId');
            $table->foreign('usuarioId','fk_Usuariotipodetrabajo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            
            
            $table->unsignedInteger('tipoDeTrabajoId');
            $table->foreign('tipoDeTrabajoId','fk_Usuariotipodetrabajo_tipoDeTrabajo')->references('id')->on('tipoDeTrabajo')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('usuario_TipoDeTrabajo');
    }
}
