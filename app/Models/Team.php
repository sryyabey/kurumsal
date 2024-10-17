<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['first_name', 'last_name', 'position', 'description', 'status'];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getProfileImageUrl()
    {
        return $this->getFirstMediaUrl('profile_images') ?: '/path/to/default/image.jpg';
    }
}
