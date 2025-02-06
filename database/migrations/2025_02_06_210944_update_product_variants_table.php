<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_variants', function (Blueprint $table) {
            $table->decimal('price')->nullable()->change();
            $table->decimal('length')->nullable()->change();
            $table->decimal('width')->nullable()->change();
            $table->decimal('height')->nullable()->change();
            $table->string('gate_size')->nullable()->change();
            $table->decimal('area')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_variants', function (Blueprint $table) {
            $table->decimal('price')->nullable(false)->change();
            $table->decimal('length')->nullable(false)->change();
            $table->decimal('width')->nullable(false)->change();
            $table->decimal('height')->nullable(false)->change();
            $table->string('gate_size')->nullable(false)->change();
            $table->decimal('area')->nullable(false)->change();
        });
    }
};
