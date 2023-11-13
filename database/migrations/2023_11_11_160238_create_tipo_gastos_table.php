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
        Schema::create('tipo_gastos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('balance', 20, 2);
            $table->unsignedBigInteger('departamento_id')->index();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->unsignedBigInteger('iglesia_id')->index();
            $table->foreign('iglesia_id')->references('id')->on('iglesias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_gastos');
    }
};
