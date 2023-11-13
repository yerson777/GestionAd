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
        Schema::create('cheque_cuentas', function (Blueprint $table) {
            $table->id();
            $table->decimal('balance', 20, 2);
            $table->unsignedBigInteger('idCuenta')->index();
            $table->foreign('idCuenta')->references('id')->on('cuentas')->onDelete('cascade'); 
            $table->unsignedBigInteger('idCheque')->index();
            $table->foreign('idCheque')->references('id')->on('cheques')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheque_cuentas');
    }
};
