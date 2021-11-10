<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hola2 extends Controller
{
    public function hola2($a){
        return view('layout.HolaM',['a'=>$a]);
    }
// La variabe "a" es traida desde navegador y llevado al html para que sea mostrado
    public function h2($a){
        return view('layout.Hola2',['a'=>$a]);
    }
}
