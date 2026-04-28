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
        Schema::table('rooms', function (Blueprint $table) {
            if (! Schema::hasColumn('rooms', 'is_available')) {
                $table->boolean('is_available')->default(true)->after('is_featured');
            }

            if (! Schema::hasColumn('rooms', 'unavailable_from')) {
                $table->date('unavailable_from')->nullable()->after('is_available');
            }

            if (! Schema::hasColumn('rooms', 'unavailable_to')) {
                $table->date('unavailable_to')->nullable()->after('unavailable_from');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            if (Schema::hasColumn('rooms', 'unavailable_to')) {
                $table->dropColumn('unavailable_to');
            }

            if (Schema::hasColumn('rooms', 'unavailable_from')) {
                $table->dropColumn('unavailable_from');
            }

            if (Schema::hasColumn('rooms', 'is_available')) {
                $table->dropColumn('is_available');
            }
        });
    }
};
