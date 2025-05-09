<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('weather_requests', function (Blueprint $table) {
            $table->id();
            // foreign key to cities.id
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            // raw API response
            $table->json('response');
            // when we fetched it
            $table->timestamp('fetched_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('weather_requests');
    }
}
// This migration creates a table to store weather requests, including a foreign key to the cities table, the raw API response, and the timestamp of when the data was fetched.
