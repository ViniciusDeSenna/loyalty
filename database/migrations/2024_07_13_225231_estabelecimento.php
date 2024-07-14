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
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado', 2);
            $table->string('cep', 8);
            $table->timestamps();
        });
        

        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('nome');
            $table->integer('cnpj');
            $table->foreignId('endereco_id')->unique()->nullable();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->cascadeOnDelete();
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
        Schema::dropIfExists('estabelecimentos');
    }
};
