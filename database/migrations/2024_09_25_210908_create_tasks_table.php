<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar las migraciones para crear la tabla tasks.
     */
    public function up(): void
    {
        // Crear la tabla tasks
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Revertir las migraciones eliminando la tabla tasks.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
