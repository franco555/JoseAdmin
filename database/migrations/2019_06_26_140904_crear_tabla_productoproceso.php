<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductoproceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductoProceso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('Stock')->nullable();
            $table->decimal('PrecioUnitario')->nullable();

            $table->unsignedInteger('ProcesoId');
            $table->foreign('ProductoId','fk_productoProceso_Proceso')->references('id')->on('proceso')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('ProductoId');
            $table->foreign('ProductoId','fk_productoProceso_producto')->references('id')->on('producto')->onDelete('restrict')->onUpdate('restrict');
            

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
        Schema::dropIfExists('ProductoProceso');
    }
}
