<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Capso extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table ='progression';

    protected $fillable = [
        'stt',
        'id_service',        
        'time_start',        
        'hsd',
    ];

    protected $attributes = ['ten_kh'=> 2 ,'nguoncap'=> 3 ];

    public function user(){
        return $this->belongsTo(User::class,'ten_kh','id');
    }
    public function dichvu(){
        return $this->belongsTo(Dichvu::class,'id_service','id');
    } 
    public function thietbi(){
        return $this->belongsTo(Device::class,'nguoncap','id');
    } 
   

    //  public function roles(){


}
