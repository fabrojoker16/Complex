<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['id','nombre1', 'nombre2', 'apellido1', 'apellido2','cedula','telefono','direccion','correo',];
}
