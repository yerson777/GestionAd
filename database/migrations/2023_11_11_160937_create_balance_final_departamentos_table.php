<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balance_final_departamentos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedBigInteger('idTipoGasto')->index();
            $table->foreign('idTipoGasto')->references('id')->on('tipo_gastos');
            $table->decimal('montoGasto', 20, 2);
            $table->unsignedBigInteger('idTipoIngreso')->index();
            $table->foreign('idTipoIngreso')->references('id')->on('tipo_ingresos');
            $table->decimal('montoIngreso', 20, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance_final_departamentos');
    }
};
