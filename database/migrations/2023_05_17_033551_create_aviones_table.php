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
        Schema::create('aviones', function (Blueprint $table) {
            $table->id();
            $table->integer("modelo");
            $table->string("n_asientos");   #numero de asientos
            $table->string("peso_avion");
            $table->string("h_piloto");     #horas de vuelo del piloto  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aviones');
    }
};
