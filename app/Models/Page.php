<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'show_in_menu',  // Menüde görünüp görünmeyeceğini belirten alan
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'show_in_menu' => 'boolean',  // 'show_in_menu' alanı boolean olarak ayarlandı
    ];

    /**
     * Register media collections.
     */
    public function registerMediaCollections(): void
    {
        // Birden fazla resim eklenebilir
        $this->addMediaCollection('images');
    }

    /**
     * User ilişkisi (Sayfayı oluşturan kullanıcı).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
