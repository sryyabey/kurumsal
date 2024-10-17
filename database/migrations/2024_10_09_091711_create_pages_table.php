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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // User ile ilişki
            $table->string('title');                // Sayfa başlığı
            $table->string('slug')->unique();       // URL dostu sayfa ismi
            $table->text('content')->nullable();                // Sayfa içeriği
            $table->string('status')->default('draft'); // Yayın durumu (taslak veya yayınlanmış)

            // SEO alanları
            $table->string('meta_title')->nullable();     // SEO için meta başlık
            $table->string('meta_description')->nullable(); // SEO için meta açıklama
            $table->string('meta_keywords')->nullable();   // SEO için anahtar kelimeler

            // Resim yolu
            $table->string('image')->nullable();       // Sayfa resmi (Spatie için kullanılacak)

            // Menüde görünüp görünmeyeceği
            $table->boolean('show_in_menu')->default(true);  // Menüde görünsün mü
            $table->boolean('show_in_home')->default(false);  // Menüde görünsün mü
            $table->integer('number')->nullable();  // Menüde görünsün mü

            $table->timestamps();

            // Foreign key ilişkisi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
