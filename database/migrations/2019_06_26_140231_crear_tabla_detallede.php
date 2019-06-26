<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetallede extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleDE', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('Precio')->nullable();
            $table->smallInteger('Cantidad')->nullable();

            $table->unsignedInteger('documentoEntradaId');
            $table->foreign('documentoEntradaId','fk_detalleDE_documentoEntrada')->references('id')->on('documentoEntrada')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('productoProcesoId');
            $table->foreign('productoProcesoId','fk_detalleDE_productoProceso')->references('id')->on('productoProceso')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('detalleDE');
    }
}
