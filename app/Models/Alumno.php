<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'alumnos';

    protected $fillable = [
        'n_control',
        'nombre',
        'edad',
        'sexo',
        'fecha_nacimiento',
        'domicilio',
        'telefono'
    ];
}
