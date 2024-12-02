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
        Schema::table('vlans', function (Blueprint $table) {
            $table->string('vlan')->nullable()->change();
            $table->string('port_sw')->nullable()->change();
            $table->string('sw')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vlans', function (Blueprint $table) {
            $table->string('vlan')->nullable()->change();
            $table->string('port_sw')->nullable()->change();
            $table->string('sw')->nullable()->change();
        });
    }
};
