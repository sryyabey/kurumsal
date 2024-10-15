<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class GalleryImage extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['image_path', 'title', 'description', 'status'];

    public function getFirstMediaUrl($collectionName = 'default')
    {
        $media = $this->getFirstMedia($collectionName);
        return $media ? $media->getUrl() : null;
    }
}
