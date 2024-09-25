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
            $table->string('country', 50)->nullable()->change();
            $table->string('province', 50)->nullable()->change();
            $table->string('district', 255)->nullable()->change();
            $table->string('ward', 255)->nullable()->change();
            $table->string('address', 255)->nullable()->change();
            $table->string('phone_number', 11)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('country', 50)->notNullable()->change();
            $table->string('province', 50)->notNullable()->change();
            $table->string('district', 255)->notNullable()->change();
            $table->string('ward', 255)->notNullable()->change();
            $table->string('address', 255)->notNullable()->change();
            $table->string('phone_number', 11)->notNullable()->change();
        });
    }
};
