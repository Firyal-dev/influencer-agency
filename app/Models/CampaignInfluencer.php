<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignInfluencer extends Model
{
    protected $fillable = [
        'campaign_id',
        'influencer_id',
    ];
}
