<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_brand',
        'deskripsi_brand',
        'industri',
        'path_img',
        'client_id'
    ];

    function campaigns() {
        return $this->hasMany(Campaign::class);
    }

    function client() {
        return $this->belongsTo(Client::class);
    }
}
