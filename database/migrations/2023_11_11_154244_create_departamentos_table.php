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
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('tipo_presupuesto', ['porcentaje', 'fijo']);
            $table->decimal('presupuesto', 20, 2);
            $table->decimal('balance', 20, 2);
            $table->enum('tipo', ['iglesia', 'campo']);
            $table->unsignedBigInteger('iglesia_id')->index();
            $table->foreign('iglesia_id')->references('id')->on('iglesias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departamentos');
    }
};
