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
        Schema::create('room_reservation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_user_id')->constrained('guest_user');
            $table->foreignId('room_id')->constrained('rooms');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('is_approved')->default(false);
            $table->timestamps();

        });      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
