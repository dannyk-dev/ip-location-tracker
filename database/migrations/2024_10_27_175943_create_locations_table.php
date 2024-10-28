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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('areaCode')->nullable();
            $table->string('cityName')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('currencyCode')->nullable();
            $table->string('ip');
            $table->string('isoCode')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('metroCode')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('regionCode');
            $table->string('timezone');
            $table->string('zipCode')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
