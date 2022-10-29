<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function consultar(){
        $alumnos = Alumno::paginate(3);

        return view('alumno.alumnos', compact('alumnos'));
    }

    function registrar(){
        return view('alumno.registrar');
    }

    function guardar(Request $datos){
        $alumno = Alumno::create($datos->post());

        return redirect('/alumnos');
    }
}
