<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAkun extends Model
{
    protected $fillable = [
        'platform',
        'url',
        'influencer_id'
    ];

    function influencers() {
        return $this->belongsTo(Influencer::class);
    }
}
