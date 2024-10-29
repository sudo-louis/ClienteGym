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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->nullable(); // Añadir columna 'nickname'
            $table->string('github_id')->nullable(); // Añadir columna 'github_id'
            $table->string('auth_type'); // Añadir columna 'auth_type'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nickname', 'github_id', 'auth_type']); // Eliminar las columnas si se revierte la migración
        });
    }
};