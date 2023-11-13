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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_de');
            $table->string('url');
            $table->string('imagen');
            $table->date('fecha');
            $table->decimal('balance', 20, 2);
            $table->foreignId('idRegistro')->constrained('registros')->onDelete('cascade');
            $table->foreignId('idMiembro')->constrained('miembros')->onDelete('cascade');
            $table->foreignId('idTipoIngresoFijo')->nullable()->constrained('tipo_ingresos')->onDelete('cascade');
            $table->foreignId('idTipoIngresoTemporal')->nullable()->constrained('tipo_ingresos')->onDelete('cascade');
            $table->string('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
