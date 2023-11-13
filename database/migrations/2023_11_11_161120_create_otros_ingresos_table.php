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
        Schema::create('otros_ingresos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('comprobante');
            $table->decimal('monto', 20, 2);
            $table->unsignedBigInteger('idTipoIngreso')->index();
            $table->foreign('idTipoIngreso')->references('id')->on('tipo_ingresos');
            $table->unsignedBigInteger('cuenta_id')->index();
            $table->foreign('cuenta_id')->references('id')->on('cuentas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otros_ingresos');
    }
};
