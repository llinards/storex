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
        Schema::table('products', function (Blueprint $table) {
            $table->json('available_area')->nullable()->after('description');
            $table->json('available_width')->nullable()->after('description');
            $table->json('available_height')->nullable()->after('description');
            $table->json('available_length')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('available_area');
            $table->dropColumn('available_width');
            $table->dropColumn('available_height');
            $table->dropColumn('available_length');
        });
    }
};
