<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use Illuminate\Http\Request;

class ActivitygameController extends Controller
{
    /*
     * actividad y juegos de niños
     *
     */
        public function index()
    {
        return view('actividadesjuegos.niños.actividadUno.niños');
    }
        public function actividadDos()
        {
            return view('actividadesjuegos.niños.actividadDos.semaforo');
        }
        //cuento de niño
        public function boy(){
            return view('actividadesjuegos.niños.actividadUno.cuentos.niño');
        }
        //cuento de niña
        public function girl()
        {
            return view('actividadesjuegos.niños.actividadUno.cuentos.niña');
        }
        /*
        * actividad y juegos de jovenes
        *
        */
        //actividad dos
            //cuatro fotos una palabra
        public function FourPicsOneWord()
        {
            return view('actividadesjuegos.jovenes.actividadDos.index');
        }
}
