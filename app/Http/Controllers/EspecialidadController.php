<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    function consultar(){
        $especialidades = Especialidad::paginate(5);
        return view('especialidad.especialidades', compact('especialidades'));
    }
}
