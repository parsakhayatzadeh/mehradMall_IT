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
        Schema::table('ip_statics', function (Blueprint $table) {
            $table->string('vlan')->nullable()->change();
            $table->string('ip')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ip_statics', function (Blueprint $table) {
            $table->string('vlan')->nullable()->change();
            $table->string('ip')->nullable()->change();

        });
    }
};
