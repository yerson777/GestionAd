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
        Schema::create('bancos', function (Blueprint $table) {
            $table->id();
            $table->decimal('balance', 20, 2);
            $table->date('fecha');
            $table->string('url');
            $table->enum('tipo', ['entradas', 'salidas']);
            $table->unsignedBigInteger('registro_id')->nullable(); 
            $table->foreign('registro_id')->references('id')->on('registros');
            $table->unsignedBigInteger('cheque_cuenta_id')->nullable(); 
            $table->foreign('cheque_cuenta_id')->references('id')->on('cheque_cuentas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bancos');
    }
};
