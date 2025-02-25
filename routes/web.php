<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('landing');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/crear-contacto', function ( Request $request) 
{
    
    //dd('Si llego a esta ruta')
    dd($request ->all());

    //Validar datos de formulario


    //Guardar a BD

    //Redirigir
});