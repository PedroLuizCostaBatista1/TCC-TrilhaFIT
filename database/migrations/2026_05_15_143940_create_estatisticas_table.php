<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estatisticas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuarios_id')->constrained();
            $table->integer('rpm')->default(0);
            $table->integer('corridas')->default(0);
            $table->decimal('distancia', 10, 2)->default(0.00);
            $table->decimal('calorias', 10, 2)->default(0.00);
            $table->decimal('velocidaade', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estatisticas');
    }
};
