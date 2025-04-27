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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->decimal('price');
            $table->decimal('length');
            $table->decimal('width');
            $table->decimal('height');
            $table->decimal('space_between_arches')->nullable();
            $table->string('gate_size');
            $table->decimal('area');
            $table->decimal('pvc_tent')->nullable();
            $table->string('frame_tube')->nullable();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
