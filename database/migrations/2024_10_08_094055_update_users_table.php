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
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['country']);
            $table->dropUnique(['province']);
            $table->dropUnique(['district']);
            $table->dropUnique(['ward']);
            $table->dropUnique(['address']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unique('country');
            $table->unique('province');
            $table->unique('district');
            $table->unique('ward');
            $table->unique('address');
        });
    }
};
