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
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            $table->string('número');
            $table->string('nombre');
            $table->date('fecha');
            $table->text('detalle');
            $table->decimal('balance', 20, 2);
            $table->enum('tipo',['iglesia', 'campo']);
            $table->longText('token');
            $table->unsignedBigInteger('idIglesia')->index();
            $table->foreign('idIglesia')->references('id')->on('iglesias')->onDelete('no action');           
            $table->unsignedBigInteger('idCuenta')->index();
            $table->foreign('idCuenta')->references('id')->on('cuentas')->onDelete('cascade');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cheques');
    }
};
