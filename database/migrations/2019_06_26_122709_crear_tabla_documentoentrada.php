<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumentoentrada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentoentrada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Numero');
            $table->decimal('PrecioTotal', 8, 2)->nullable();
            $table->double('IVA', 8, 2)->nullable();
            $table->dateTime('Fecha');
            $table->boolean('IsPayout');

            $table->unsignedInteger('usuariotipotrabajo_id');
            $table->unsignedInteger('tipodocumento_id');
            
            $table->foreign('usuariotipotrabajo_id')->references('id')->on('usuariotipodetrabajo');
            $table->foreign('tipodocumento_id')->references('id')->on('tipodocumento');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentoentrada');
    }
}
