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
        Schema::table('trackings', function (Blueprint $table) {
            $table->index('vehicle_name');
            $table->index('driver_name');
            $table->index('company_name');
            $table->index('security_start');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trackings', function (Blueprint $table) {
            $table->dropIndex(['vehicle_name']);
            $table->dropIndex(['driver_name']);
            $table->dropIndex(['company_name']);
            $table->dropIndex(['security_start']);
        });
    }
};
