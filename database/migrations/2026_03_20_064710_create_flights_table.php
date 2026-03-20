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
        Schema::create('flights', function (Blueprint $table) {
            $table->uuid('idFlight')->primary();
            $table->string('flightNumber');
            $table->string('airline');
            $table->enum('typeDirection', ['arrival', 'departure']);
            $table->string('originDestination');
            $table->timestamp('scheduledTime');
            $table->string('gate');
            $table->enum('status', ['On Time', 'Delayed', 'Boarding', 'Departed', 'Cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
