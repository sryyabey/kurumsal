<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country',
        'city',
        'district',
        'phone',
        'email',
        'postcode',
        'status',
        'google_map_link',
        'website_link',
        'description'
    ];
}
