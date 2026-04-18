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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedBigInteger('motivo_id'); // relación con motivos
            $table->foreign('motivo_id')->references('id')->on('motivos')->onDelete('cascade');
            $table->string('mail')->nullable();
            $table->dateTime('ingreso')->useCurrent();
            $table->dateTime('inicioAtencion')->nullable();
            $table->dateTime('finAtencion')->nullable();
            // Clave foránea
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); //asegura de que si el cliente no existe mas quede como null
            $table->integer('enEspera');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
