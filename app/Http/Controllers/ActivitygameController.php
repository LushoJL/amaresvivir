<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use Illuminate\Http\Request;

class ActivitygameController extends Controller
{

        public function index()
    {
        return view('actividadesjuegos.niños.actividadUno.niños');
    }
        public function actividadDos()
        {
            return view('actividadesjuegos.niños.actividadDos.semaforo');
        }
}
