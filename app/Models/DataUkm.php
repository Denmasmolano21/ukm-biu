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
        'visi',
        'misi',
        'activities',
        'benefits',
        'instagram',
        'regis_url',
        'logo_url',
        'contact_info',
        'is_open_recruitment',
    ];

    protected $casts = [
        'activities' => 'array',
        'benefits' => 'array',
        'is_open_recruitment' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
