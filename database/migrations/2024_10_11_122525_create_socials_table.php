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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Platformun tam adı (örneğin, 'Facebook')
            $table->string('name');        // Kısa adı veya kullanıcı adı (örneğin, 'facebook')
            $table->string('link');        // Sosyal medya linki (örneğin, 'https://facebook.com/...')
            $table->string('icon');        // İkon sınıfı (örneğin, 'fab fa-facebook')
            $table->string('status')->default('active');  // Durum (aktif/pasif)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
