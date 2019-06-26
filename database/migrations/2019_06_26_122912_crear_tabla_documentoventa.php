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
        Schema::create('documentoVenta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Numero');
            $table->decimal('PrecioTotal')->nullable();
            $table->double('IVA', 8, 2)->nullable();
            $table->dateTime('Fecha');
            $table->boolean('IsPayout');

            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id','fk_DocumentoVenta_cliente')->references('id')->on('cliente')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('tipoDocumento_id');
            $table->foreign('tipoDocumento_id','fk_DocumentoEntrada_tipoDocummento')->references('id')->on('tipoDocumento')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('documentoVenta');
    }
}
