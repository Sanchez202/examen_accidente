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
        Schema::create('vehiculo_personas', function (Blueprint $table) {
            $table->id();
            
            
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->unsignedBigInteger('vehiculo_id')->nullable();


            $table->foreign('persona_id')
            ->references('id')->on('personas')
            ->onDelete('set null');

            $table->foreign('vehiculo_id')
            ->references('id')->on('vehiculos')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo_personas');
    }
};
