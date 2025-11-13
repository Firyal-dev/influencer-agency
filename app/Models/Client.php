<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use SoftDeletes, HasFactory, Notifiable;

    protected $fillable = [
        'nama_perusahaan',
        'email',
        'no_hp',
        'password'
    ];

    function brands() {
        return $this->hasMany(Brand::class);
    }
}
