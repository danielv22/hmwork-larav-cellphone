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
        Schema::create('cellphone', function (Blueprint $table) {
            $table->id('id_cellphone');
            $table->string('referecia', 100);
            $table->enum('marca', [
                'Apple',
                'Honor',
                'Huawei',
                'Motorola',
                'Nokia',
                'Oppo',
                'Samsung',
                'Vivo',
                'Xiaomi'
            ]);
            $table->string('tamano_pantalla', 5);
            $table->string('resolucion', 15);
            $table->string('marca_procesador', 20);
            $table->string('velocidad_procesador', 5);
            $table->string('memoria_ram', 5);
            $table->string('memoria_interna', 5);
            $table->float('precio', 7, 2);
            $table->decimal('descuento', 5, 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cellphone');
    }
};
