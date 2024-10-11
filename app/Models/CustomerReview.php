<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_image',
        'first_name',
        'last_name',
        'comment',
        'star',
        'status'
    ];

    // Tam adı birleştiren bir özellik
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
