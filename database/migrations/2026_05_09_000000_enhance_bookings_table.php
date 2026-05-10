<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('room_id')->after('id');
            $table->string('guest_name')->after('room_id');
            $table->string('guest_email')->after('guest_name');
            $table->string('guest_phone')->nullable()->after('guest_email');
            $table->text('special_requests')->nullable()->after('guests');
            $table->string('status')->default('pending')->after('special_requests');

            // Add foreign key constraint
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['room_id']);
            $table->dropColumn([
                'room_id',
                'guest_name',
                'guest_email',
                'guest_phone',
                'special_requests',
                'status',
            ]);
        });
    }
};
