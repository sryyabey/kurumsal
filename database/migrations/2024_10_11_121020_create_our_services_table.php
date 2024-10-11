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
        Schema::create('our_services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->nullable(); // Icon için opsiyonel string alan
            $table->text('description')->nullable(); // Hizmet açıklaması
            $table->integer('number')->nullable(); // Hizmet numarası
            $table->string('location')->nullable(); // Hizmetin yeri
            $table->string('status')->default('active'); // Varsayılan olarak aktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_services');
    }
};
