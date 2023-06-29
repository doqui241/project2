<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $table ='rule';

    protected $fillable = [
        'start',
        'end',
        'prefix',
        'surfix',
        'check_auto',
        'check_prefix',
        'check_surfix',
        'check_reset',
        'id_service',
    ];
     public $timestamps = false;

     
}
