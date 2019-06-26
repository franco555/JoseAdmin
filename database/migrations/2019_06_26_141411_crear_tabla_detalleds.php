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
        Schema::create('detalleds', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('Precio', 8, 2)->nullable();
            $table->smallInteger('Cantidad')->default(0);

            $table->unsignedInteger('documentosalida_id');
            $table->unsignedInteger('productoproceso_id');
            
            $table->foreign('documentosalida_id')->references('id')->on('documentosalida');
            $table->foreign('productoproceso_id')->references('id')->on('productoproceso');
            
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
        Schema::dropIfExists('detalleds');
    }
}
