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

            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_Usuariotipodetrabajo_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            
            
            $table->unsignedInteger('tipoDeTrabajo_id');
            $table->foreign('tipoDeTrabajo_id','fk_Usuariotipodetrabajo_tipoDeTrabajo')->references('id')->on('tipoDeTrabajo')->onDelete('restrict')->onUpdate('restrict');
            
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
