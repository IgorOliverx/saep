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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('setor');
            $table->enum('prioridade', ['baixa', 'media', 'alta']);
            $table->enum('status', ['a fazer', 'fazendo', 'pronto'])->default('a fazer');
            $table->date('data_cadastro');
            $table->unsignedBigInteger('id_usuario');


            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
