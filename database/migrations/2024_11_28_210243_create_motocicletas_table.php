<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        
        Schema::create('motocicletas', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('ciudad');
            $table->string('tipo_moto');
            $table->integer('cilindraje');
            $table->integer('kilometraje');
            $table->date('fecha_soat');
            $table->date('fecha_tecnomecanica');
            $table->timestamp('expedicion_tarjeta');
            $table->string('estado_llantas');
            $table->string('estado_luces');
            $table->string('espejos');
            $table->string('bocina');
            $table->string('documentacion');
            $table->string('liquido_frenos');
            $table->string('aceite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motocicletas');
    }
};
