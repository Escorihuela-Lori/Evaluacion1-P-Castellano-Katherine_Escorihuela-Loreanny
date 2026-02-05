<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('Propiedad', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('direccion');
            $table->float('MetrosCuadrados', 8, 2);
            $table->integer('habitaciones');
            $table->boolean('disponible')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Propiedad');
    }
};
