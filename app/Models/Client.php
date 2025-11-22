<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $fillable = [
        'nama_perusahaan',
        'email',
        'no_hp',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi dengan Campaign
    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
    // Relasi dengan Brand
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }

}