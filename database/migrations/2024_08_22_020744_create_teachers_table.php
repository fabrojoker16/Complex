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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
['nombre1', 'nombre2', 'apellido1', 'apellido2','cedula','telefono','direccion','correo',];
