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
        Schema::create('incidents', function (Blueprint $table) {
            $table->ulid('idIncident')->primary();
            $table->string('incidentCode');
            $table->enum('incidentType', ['Security', 'Baggage', 'Medical', 'Facility', 'Other']);
            $table->enum('severity', ['Low', 'Medium', 'High', 'Critical']);
            $table->string('location');
            $table->text('description');
            $table->enum('status', ['Unsolved', 'Investigating', 'Resolved']);
            $table->ulid('reportedBy')->references('idUser')->on('users');
            $table->ulid('flightId')->references('idFlight')->on('flights')->nullable();
            $table->timestamp('reportedAt');
            $table->timestamp('resolvedAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
