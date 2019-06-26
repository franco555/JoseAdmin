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

            $table->unsignedInteger('documentoSalida_id');
            $table->foreign('documentoSalida_id','fk_detalleDS_DocumentoSalida')->references('id')->on('documentoSalida')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('productoProceso_id');
            $table->foreign('productoProceso_id','fk_detalleDS_productoProceso')->references('id')->on('productoProceso')->onDelete('restrict')->onUpdate('restrict');
            
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
