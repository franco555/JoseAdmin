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
        Schema::create('productoproceso', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('Stock')->nullable();
            $table->decimal('PrecioUnitario', 8, 2)->nullable();

            $table->unsignedInteger('proceso_id');
            $table->unsignedInteger('producto_id');
            
            //$table->foreign('proceso_id')->references('id')->on('proceso');
            //$table->foreign('producto_id')->references('id')->on('producto');

        });

        Schema::table('productoproceso', function($table)
        {
            //$table->foreign('proceso_id')->references('proceso')->on('id');
            //$table->foreign('producto_id')->references('producto')->on('id');
             $table->foreign('proceso_id')->references('id')->on('proceso');
            $table->foreign('producto_id')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productoproceso');
    }
}
