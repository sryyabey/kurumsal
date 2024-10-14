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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('about_title')->nullable();
            $table->string('about_description')->nullable();
            $table->string('slogan_title')->nullable();
            $table->string('slogan_description')->nullable();
            $table->string('team_title')->nullable();
            $table->string('team_description')->nullable();
            $table->string('statistic_title')->nullable();
            $table->string('statistic_description')->nullable();
            $table->string('services_title')->nullable();
            $table->string('services_description')->nullable();
            $table->string('gallery_title')->nullable();
            $table->string('gallery_description')->nullable();
            $table->string('social_title')->nullable();
            $table->string('social_description')->nullable();
            $table->string('preview_title')->nullable();
            $table->string('preview_description')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_description')->nullable();
            $table->string('footer_title')->nullable();
            $table->string('footer_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
