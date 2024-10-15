<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'about_title',
        'about_description',
        'slogan_title',
        'slogan_description',
        'team_title',
        'team_description',
        'statistic_title',
        'statistic_description',
        'services_title',
        'services_description',
        'gallery_title',
        'gallery_description',
        'social_title',
        'social_description',
        'preview_title',
        'preview_description',
        'contact_title',
        'contact_description',
        'footer_title',
        'footer_description',
    ];
}
