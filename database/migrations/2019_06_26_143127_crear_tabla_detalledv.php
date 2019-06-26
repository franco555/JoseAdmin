<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalledv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleDV', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('Precio')->nullable();
            $table->smallInteger('Cantidad')->nullable();

            $table->unsignedInteger('documentoVentaId');
            $table->foreign('documentoVentaId','fk_detalleDV_documentoVenta')->references('id')->on('documentoVenta')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('productoProcesoId');
            $table->foreign('productoProcesoId','fk_detalleDV_productoProceso')->references('id')->on('productoProceso')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('detalleDV');
    }
}
