<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRolUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedInteger('RolId');
            $table->foreign('RolId','fk_rolUsuario_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('UsuarioId');
            $table->foreign('UsuarioId','fk_rolUsuario_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('rol_usuario');
    }
}
