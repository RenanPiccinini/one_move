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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->unsignedInteger('stage_number');
            $table->string('city');
            $table->string('state', 2);
            $table->string('region');
            $table->unsignedInteger('edition_year')->default(2027);
            $table->date('date')->nullable();
            $table->string('date_display');
            $table->string('status')->default('soon'); // 'open', 'soon', 'closed'
            $table->string('registration_link')->nullable();
            $table->string('venue_name');
            $table->string('venue_address');
            $table->json('distances');
            $table->string('start_time')->default('06:30');
            $table->string('hero_image')->nullable();
            $table->text('teaser')->nullable();
            $table->longText('description')->nullable();
            $table->json('lots')->nullable();
            $table->json('kit_pickup')->nullable();
            $table->json('schedule')->nullable();
            $table->string('elevation_gain')->nullable();
            $table->json('map_coords')->nullable();
            $table->longText('regulations_summary')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
