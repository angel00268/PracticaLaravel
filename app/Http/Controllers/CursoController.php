<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view("cursos.index");
    }

    public function create()
    {
        return view("cursos.create");
    }

    public function show($curso)
    {
        //Forma 1 para pasar parametros aca el parametro combine con el nombre de la misma
        return view("cursos.show",compact("curso"));

        //Forma 2 para pasar parametros
        //return view("cursos.show",['curso' => $curso]);
    }
}
