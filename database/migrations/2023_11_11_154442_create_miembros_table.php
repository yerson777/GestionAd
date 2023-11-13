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
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->dateTime('fecha_nacimiento')->nullable()->default(now());
            $table->enum('genero', ['masculino', 'femenino'])->nullable();
            $table->string('celular',8);
            $table->string('email');
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
        Schema::dropIfExists('miembros');
    }
};
