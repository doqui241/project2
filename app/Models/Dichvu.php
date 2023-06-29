<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dichvu extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table ='services';

    protected $fillable = [
        'ma_service',
        'name_service',
        'mota',
        'id_progression',
    ];
    public $timestamps = false;

    protected $attributes = ['id_progression'=> 1];
    
    public function cap_so(){
        return $this->hasMany(Capso::class,'id');
     }
    public function rule_progression()
     {
         return $this->belongsTo(Rule::class,'id_progression','id');
     }

}
