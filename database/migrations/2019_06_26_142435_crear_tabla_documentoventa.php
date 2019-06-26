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

            $table->unsignedInteger('ClienteId');
            $table->foreign('ClienteId','fk_DocumentoVenta_Cliente')->references('id')->on('Cliente')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('TipoDocumentoId');
            $table->foreign('TipoDocumentoId','fk_DocumentoEntrada_tipodocummento')->references('id')->on('tipodocumento')->onDelete('restrict')->onUpdate('restrict');
            
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
