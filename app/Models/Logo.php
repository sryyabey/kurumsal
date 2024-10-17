<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Logo extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['number', 'alt'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logos')->singleFile();
    }
}
