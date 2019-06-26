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

            $table->unsignedInteger('DocumentoVentaId');
            $table->foreign('DocumentoVentaId','fk_detalleDV_DocumentoVenta')->references('id')->on('documentoventa')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('ProductoProcesoId');
            $table->foreign('ProductoProcesoId','fk_detalleDV_productoProceso')->references('id')->on('productoproceso')->onDelete('restrict')->onUpdate('restrict');
            
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
