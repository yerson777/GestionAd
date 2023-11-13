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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string('numeroFactura');
            $table->date('fecha');
            $table->date('fechaFactura');
            $table->decimal('monto', 20, 2);
            $table->text('detalle');
            $table->string('imagen');
            $table->unsignedBigInteger('departamento_id')->index();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->unsignedBigInteger('idCheque')->index();
            $table->foreign('idCheque')->references('id')->on('cheques');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
