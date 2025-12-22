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
        Schema::table('designs', function (Blueprint $table) {
            $table->float('rotation_x')->default(-90.0)->after('thumbnail');
            $table->float('rotation_y')->default(0.0)->after('rotation_x');
            $table->float('rotation_z')->default(0.0)->after('rotation_y');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('designs', function (Blueprint $table) {
            $table->dropColumn(['rotation_x', 'rotation_y', 'rotation_z']);
        });
    }
};
