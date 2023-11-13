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
        Schema::create('tipo_gastos_ingresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idTipoGasto')->index();
            $table->foreign('idTipoGasto')->references('id')->on('tipo_gastos');
            $table->unsignedBigInteger('idTipoIngreso')->index();
            $table->foreign('idTipoIngreso')->references('id')->on('tipo_ingresos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_gastos_ingresos');
    }
};
