<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    //


    public function showWelcome(){
        return view('welcome');


    }

    public function showPractica(){
        return view('practica7');


    }

    public function showInicio(){
        return view('Inicio');


    }

}
