<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Device extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'ma_device',
        'name_device',
        'loai_device',
        'adress',
        'username',
        'password',
        'dichvusd',
    ];
    public function dichvu_sd(){
        return $this->belongsTo(Dichvu::class,'dichvusd','id');
     }

}
