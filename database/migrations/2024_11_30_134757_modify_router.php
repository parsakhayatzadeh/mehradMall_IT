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
        Schema::table('routers', function (Blueprint $table) {
            $table->string('ip_router')->nullable()->change();
            $table->string('user')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('internet_speed')->nullable()->change();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('routers', function (Blueprint $table) {
            $table->string('ip_router')->nullable()->change();
            $table->string('user')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('internet_speed')->nullable()->change();


        });
    }
};
