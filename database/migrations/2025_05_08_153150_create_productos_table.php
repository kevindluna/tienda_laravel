<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('Nombre', 60);
            $table->string('Descripcion', 150)->nullable();
            $table->string('Marca', 40)->nullable();
            $table->string('Garantia', 20)->nullable();
            $table->string('Color', 20)->nullable();
            $table->string('Disenado', 20)->nullable();
            $table->string('ImagenRuta', 255)->nullable();
        });

        Schema::create('descuentos', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo');
            $table->string('nombre', 60)->nullable();
            $table->integer('descuento');
            $table->foreign('codigo')->references('codigo')->on('productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
