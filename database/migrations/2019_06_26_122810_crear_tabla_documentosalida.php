<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumentosalida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentosalida', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Numero');
            $table->decimal('PrecioTotal', 8, 2)->nullable();
            $table->double('IVA', 8, 2)->nullable();
            $table->dateTime('Fecha');
            $table->boolean('IsPayout');

            $table->unsignedInteger('usuariotipodetrabajo_id');
            $table->unsignedInteger('tipodocumento_id');
            
            $table->foreign('usuariotipodetrabajo_id')->references('id')->on('usuariotipodetrabajo');
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
        Schema::dropIfExists('documentosalida');
    }
}
