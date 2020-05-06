<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumenDePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumen_de_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('Cliente');
            $table->double('Monto_ministrado');
            $table->double('Financiado');
            $table->date('Fecha_ministration');
            $table->date('Fecha_vencimiento');
            $table->double('Cuota');
            $table->integer('No_de_pagos');
            $table->integer('Pagos_realizados');
            $table->double('Abonado');
            $table->double('Saldo_pendiente');
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
        Schema::dropIfExists('resumen_de_pagos');
    }
}
