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
        Schema::table('product_variants', function (Blueprint $table) {
            $table->string('price')->nullable()->change();
            $table->string('length')->nullable()->change();
            $table->string('width')->nullable()->change();
            $table->string('height')->nullable()->change();
            $table->string('space_between_arches')->nullable()->change();
            $table->string('area')->nullable()->change();
            $table->string('pvc_tent')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_variants', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->change();
            $table->decimal('length', 8, 2)->change();
            $table->decimal('width', 8, 2)->change();
            $table->decimal('height', 8, 2)->change();
            $table->decimal('space_between_arches', 8, 2)->change();
            $table->decimal('area', 8, 2)->change();
            $table->decimal('pvc_tent', 8, 2)->change();
        });
    }
};
