<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
     public $timestamps=false;
     protected $table='personas'; 

       
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
    ];
}
