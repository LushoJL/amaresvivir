<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdultsController extends Controller
{
    //
    public function index()
    {
        return view('landingPage/actividadesjuegos.adultos.hablemosClaro.index');
    }

    public function firstCase()
    {
        return view('landingPage/actividadesjuegos.adultos.hablemosClaro.casoUno');
    }
}
