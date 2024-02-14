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
        Schema::create('tbl_gbookings', function (Blueprint $table) {
            $table->id();
            $table->string('GBookingname')->nullable();
            $table->string('heading')->nullable();
            $table->string('title')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('image')->nullable();
            $table->longText('img_url')->nullable();
            $table->string('discount')->nullable();
            $table->string('BookingType')->nullable();
            $table->string('recognize')->nullable();
            $table->string('deleteStatus')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_gbookings');
    }
};
