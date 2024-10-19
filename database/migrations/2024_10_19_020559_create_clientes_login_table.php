<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('clientes_login', function (Blueprint $table) {
            $table->id(); // Campo ID con auto_increment
            $table->string('name'); // Nombre del cliente
            $table->string('email')->unique(); // Email único
            $table->timestamp('email_verified_at')->nullable(); // Fecha de verificación de email
            $table->string('password'); // Contraseña
            $table->rememberToken(); // Token de sesión
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::dropIfExists('clientes_login');
    }
};
