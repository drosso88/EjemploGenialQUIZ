<?php

namespace App\Http\Controllers;
use App\Pregunticas;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
   public function devuelve_preguntas($tema){
       return Pregunticas :: where ('tema', $tema)->inRandomOrder()->first();
   }

   public function carga_preguntas($tema){
    return view ('pregunta')->with ('pregunta', Pregunticas :: where ('tema', $tema)->inRandomOrder()->limit(1)->get())
                            ->with('tema',$tema);

   }
}
