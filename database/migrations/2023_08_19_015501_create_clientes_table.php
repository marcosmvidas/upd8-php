<?php

use App\Enums\GeneroEnum;
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
            $table->string('cpf', 11)->unique();
            $table->string('nome');
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo', GeneroEnum::toValues())->nullable();
            $table->string('endereco')->nullable();
            $table->string('estado')->nullable();
            $table->string('cidade')->nullable();
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
