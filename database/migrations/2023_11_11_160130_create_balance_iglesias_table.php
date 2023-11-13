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
        Schema::create('balance_iglesias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha', 20, 2);
            $table->decimal('monto', 20, 2);
            $table->unsignedBigInteger('iglesia_id')->index();
            $table->foreign('iglesia_id')->references('id')->on('iglesias');
            $table->unsignedBigInteger('periodos_id')->index();
            $table->foreign('periodos_id')->references('id')->on('periodos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance_iglesias');
    }
};
