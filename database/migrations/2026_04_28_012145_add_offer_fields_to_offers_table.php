<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            if (!Schema::hasColumn('offers', 'original_price')) {
                $table->decimal('original_price', 10, 2)->default(0)->after('description');
            }

            if (!Schema::hasColumn('offers', 'offer_percentage')) {
                $table->decimal('offer_percentage', 5, 2)->default(0)->after('original_price');
            }

            if (!Schema::hasColumn('offers', 'offer_price')) {
                $table->decimal('offer_price', 10, 2)->default(0)->after('offer_percentage');
            }

            if (!Schema::hasColumn('offers', 'is_available')) {
                $table->boolean('is_available')->default(true)->after('offer_price');
            }

            if (!Schema::hasColumn('offers', 'start_date')) {
                $table->date('start_date')->nullable()->after('is_available');
            }

            if (!Schema::hasColumn('offers', 'end_date')) {
                $table->date('end_date')->nullable()->after('start_date');
            }

            if (!Schema::hasColumn('offers', 'image')) {
                $table->string('image')->nullable()->after('end_date');
            }
        });
    }

    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropColumn([
                'original_price',
                'offer_percentage',
                'offer_price',
                'is_available',
                'start_date',
                'end_date',
                'image',
            ]);
        });
    }
};