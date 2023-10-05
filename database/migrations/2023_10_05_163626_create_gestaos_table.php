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
        Schema::create('gestaos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable(false);
            $table->string('descrisao')->nullable(false);
            $table->string('data_inicio')->nullable(false);
            $table->string('data_terminio')->nullable(false);
            $table->decimal('valor_projeto')->nullable(false);
            $table->string('status')-> nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestaos');
    }
};
