<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            if (!Schema::hasColumn('properties', 'address')) {
                $table->string('address')->nullable();
            }
            if (!Schema::hasColumn('properties', 'price_per_night')) {
                $table->decimal('price_per_night', 8, 2)->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            if (Schema::hasColumn('properties', 'address')) {
                $table->dropColumn('address');
            }
            if (Schema::hasColumn('properties', 'price_per_night')) {
                $table->dropColumn('price_per_night');
            }
        });
    }
};
