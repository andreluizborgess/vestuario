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
        Schema::create('roupas', function (Blueprint $table) {
            $table->id();
            $table->string('tecido')->nullable(false);
            $table->string('tamanho')->nullable(false);
            $table->string('cor')->nullable(false);
            $table->string('categoria')->nullable(false);
            $table->string('fabricacao')->nullable(false);
            $table->string('estacao')->nullable(false);
            $table->string('descricao')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roupas');
    }
};
