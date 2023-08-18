<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    //est se hace a mano de la tabla que se crea
    protected $fillable = [
        'name',
        'age',
        'num-afi',
        'adress',
        'status'
    ];
}
