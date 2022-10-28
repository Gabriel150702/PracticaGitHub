<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorPractica7;


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

    public function procesarNombre(validadorPractica7 $req){

        return redirect('Inicio');
        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();

        
    }


}
