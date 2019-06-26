<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumentoventa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentoventa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Numero');
            $table->decimal('PrecioTotal', 8, 2)->nullable();
            $table->double('IVA', 8, 2)->nullable();
            $table->dateTime('Fecha');
            $table->boolean('IsPayout');

            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('tipodocumento_id');
            
            $table->foreign('cliente_id')->references('id')->on('cliente');
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
        Schema::dropIfExists('documentoventa');
    }
}
