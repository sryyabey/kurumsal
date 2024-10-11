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

        Schema::create('customer_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image')->nullable(); // Müşteri profil resmi, opsiyonel
            $table->string('first_name'); // Müşteri adı
            $table->string('last_name'); // Müşteri soyadı
            $table->text('comment'); // Müşteri yorumu
            $table->tinyInteger('star')->unsigned()->default(1)->comment('Yıldız 1-5 arasında'); // Yıldız derecelendirmesi
            $table->string('status')->default('active'); // Durum, varsayılan olarak aktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_reviews');
    }
};
