<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Influencer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'path_img',
        'kategori',
    ];

    function campaigns() {
        return $this->belongsToMany(Campaign::class, 'campaign_influencers')->withTimestamps();
    }

    function SocialAkuns() {
        return $this->hasMany(SocialAkun::class);
    }
}
