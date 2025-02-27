<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

abstract class Controller
{
    //
    public function create() 
    {
        return view('contacto');
    }

public function store(Request $request) 
    {
        
        //dd('Si llego a esta ruta')
        dd($request ->all(), $request->correo);
    
        //Validar datos de formulario
    
    
        //Guardar a BD
    
        //Redirigir
    }
}
