<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use Illuminate\Http\Request;

class ActivitygameController extends Controller
{
    /**
     * LANDING PAGE
     */
    /*
     * niños
     *
     */
        public function index()
    {
        return view('landingPage/actividadesjuegos.niños.actividadUno.niños');
    }
        public function actividadDos()
        {
            return view('landingPage/actividadesjuegos.niños.actividadDos.semaforo');
        }
        function actividadDosRojo(){
            return view('landingPage/actividadesjuegos.niños.actividadDos.rojo');
        }
        function actividadDosAmarillo(){
            return view('landingPage/actividadesjuegos.niños.actividadDos.amarillo');
        }
        function actividadDosVerde(){
            return view('landingPage/actividadesjuegos.niños.actividadDos.verde');
        }
        //cuento de niño
        public function boy(){
            return view('landingPage/actividadesjuegos.niños.actividadUno.cuentos.niño');
        }
        //cuento de niña
        public function girl()
        {
            return view('landingPage/actividadesjuegos.niños.actividadUno.cuentos.niña');
        }
        /*
        * jovenes
        *
        */
        //actividad dos
            //cuatro fotos una palabra
        public function FourPicsOneWord()
        {
            return view('landingPage/actividadesjuegos.jovenes.actividadDos.index');
        }

        /**
         * ADMIN
         */
        function niñoAdmin(){
            return view('admin.actividadesJuegos.niño');
        }
        function jovenAdmin(){
            return view('admin.actividadesJuegos.joven');
        }
        function adultoAdmin(){
            return view('admin.actividadesJuegos.adulto');
        }


}
