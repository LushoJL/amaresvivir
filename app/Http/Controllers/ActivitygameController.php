<?php

namespace App\Http\Controllers;

use App\Pensamiento;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

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
            return view('admin.actividadesJuegos.niño.actividaddos.niño');
        }
        function jovenAdmin(){
            return view('admin.actividadesJuegos.joven');
        }
        function adultoAdmin(){
            return view('admin.actividadesJuegos.adulto');
        }
        //recortar imagenes
        public function RecortarImagenenRojo(Request $request){
            $this->guardarImagen('rojo',$request);
            return redirect()->back();
        }
        public function RecortarImagenenAmarillo(Request $request){
            $this->guardarImagen('amarillo',$request);
            return redirect()->back();
        }
        public function RecortarImagenenVerde(Request $request){
            $this->guardarImagen('verde',$request);
            return redirect()->back();
        }

        public function guardarImagen($color,$req){
            Storage::deleteDirectory('public/'.$color);

            if($req->hasFile('base')) {
                $image       = $req->file('base');
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(400, 400);
                Storage::put("public/".$color."/base.jpg", $image_resize->encode());
                $url = $req->root().Storage::url($color.'/base.jpg');
                $x=$y=0;
                for ($i=1;$i<=9;$i++){
                    $img = Image::make($url);
                    $img->crop(133, 133, $x, $y);
                    Storage::put("public/".$color."/".$i.".jpg", $img->encode());
                    $x+=133;
                    if ($i%3==0){
                        $y+=133;
                        $x=0;
                    }
                }
            }
        }
}
