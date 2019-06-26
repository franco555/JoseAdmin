<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleDS', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('Precio')->nullable();
            $table->smallInteger('Cantidad')->nullable();

            $table->unsignedInteger('DocumentoSalidaId');
            $table->foreign('DocumentoSalidaId','fk_detalleDS_DocumentoSalida')->references('id')->on('documentosalida')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('ProductoProcesoId');
            $table->foreign('ProductoProcesoId','fk_detalleDS_productoProceso')->references('id')->on('productoproceso')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('detalleDS');
    }
}
