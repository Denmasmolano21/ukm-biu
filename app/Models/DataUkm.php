<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUkm extends Model
{
    use HasFactory;

    protected $table = 'data_ukms';

    protected $fillable = [
        'name',
        'slug',
        'category',
        'short_description',
        'full_description',
        'activities',
        'benefits',
        'instagram',
        'logo_url',
        'contact_info',
    ];

    protected $casts = [
        'activities' => 'array',
        'benefits' => 'array',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
