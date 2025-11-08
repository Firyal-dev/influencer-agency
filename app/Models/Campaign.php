<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul',
        'deskripsi',
        'budget',
        'status',
        'brand_id',
        'path_img'
    ];

    function brand() {
        return $this->belongsTo(Brand::class);
    }

    function influencers() {
        return $this->belongsToMany(Influencer::class, 'campaign_influencers')->withTimestamps();
    }
}
