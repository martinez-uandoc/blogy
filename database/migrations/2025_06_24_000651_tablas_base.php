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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('password', 200);
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('portada', 400);
            $table->string('descripcion');
            $table->text('contenido');
            $table->datetime('fecha_visualizacion')->nullable();
            $table->foreignId('usuario_id')->constrained("usuarios", "id");
            $table->timestamps();
        });


        Schema::create('etiquetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });


        Schema::create('articulo_etiqueta', function (Blueprint $table) {
            $table->foreignId('etiqueta_id')->constrained("etiquetas", "id");
            $table->foreignId('articulo_id')->constrained("articulos", "id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
