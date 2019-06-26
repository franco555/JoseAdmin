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

            $table->unsignedInteger('DocumentoEntradaId');
            $table->foreign('DocumentoEntradaId','fk_detalleDE_DocumentoEntrada')->references('id')->on('documentoentrada')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('ProductoProcesoId');
            $table->foreign('ProductoProcesoId','fk_detalleDE_productoProceso')->references('id')->on('productoproceso')->onDelete('restrict')->onUpdate('restrict');
            
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
