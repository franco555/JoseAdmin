<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumentosalida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentoSalida', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Numero');
            $table->decimal('PrecioTotal')->nullable();
            $table->double('IVA', 8, 2)->nullable();
            $table->dateTime('Fecha');
            $table->boolean('IsPayout');

            $table->unsignedInteger('usuario_TipoDeTrabajoId');
            $table->foreign('usuario_TipoDeTrabajoId','fk_DocumentoEntrada_usuarioTipoDeTrabajo')->references('id')->on('usuario_TipoDeTrabajo')->onDelete('restrict')->onUpdate('restrict');
            
            $table->unsignedInteger('tipoDocumentoId');
            $table->foreign('tipoDocumentoId','fk_DocumentoEntrada_tipoDocummento')->references('id')->on('tipoDocumento')->onDelete('restrict')->onUpdate('restrict');
            
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
        Schema::dropIfExists('documentoSalida');
    }
}
