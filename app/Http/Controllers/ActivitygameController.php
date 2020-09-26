<?php

namespace App\Http\Controllers;

use App\semaforo;
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
        return view('landingPage/actividadesjuegos.niños.hablemosClaro.niños');
    }
        public function actividadDos()
        {
            return view('landingPage/actividadesjuegos.niños.actividadDos.semaforo');
        }
        function actividadDosRojo(){

            return view('landingPage/actividadesjuegos.niños.actividadDos.rojo', ['color' => semaforo::findOrFail(1)]);
        }
        function actividadDosAmarillo(){
            return view('landingPage/actividadesjuegos.niños.actividadDos.amarillo', ['color' => semaforo::findOrFail(1)]);
        }
        function actividadDosVerde(){
            return view('landingPage/actividadesjuegos.niños.actividadDos.verde', ['color' => semaforo::findOrFail(1)]);
        }
        //cuento de niño
        public function boy(){
            return view('landingPage/actividadesjuegos.niños.hablemosClaro.cuentos.niño');
        }
        //cuento de niña
        public function girl()
        {
            return view('landingPage/actividadesjuegos.niños.hablemosClaro.cuentos.niña');
        }
        /*
        * jovenes
        *
        */

            //actividad uno
        public function HablemosClaroIndex(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.index');
        }
    public function HablemosClaro(){
        return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.hablemosClaro');
    }
        public function diversidad(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.diversidad');

        }
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
            return 'success';
        }
        public function RecortarImagenenAmarillo(Request $request){
            $this->guardarImagen('amarillo',$request);
            return 'success amarillo';
        }
        public function RecortarImagenenVerde(Request $request){
            $this->guardarImagen('verde',$request);
            return 'success verde';
        }

        public function guardarImagen($color,$req){
            if(strlen( $req->image)>100 ){
                $config=base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$req->image));
                $tmpFilePath = sys_get_temp_dir() . '/' . Str::uuid()->toString();
                file_put_contents($tmpFilePath, $config);
                $tmpFile = new File($tmpFilePath);

                $image = new UploadedFile(
                    $tmpFile->getPathname(),
                    $tmpFile->getFilename(),
                    $tmpFile->getMimeType(),
                    0,
                    false
                );
                $image_resize = Image::make($image);
                $image_resize->resize(400, 400);
                Storage::disk('s3')->put("public/".$color."/base.jpg", $image_resize->encode(), 'public');
                $url = Storage::disk('s3')->url('public/'.$color.'/base.jpg');
                $x=$y=0;
                for ($i=1;$i<=9;$i++){
                    $img = Image::make($url);
                    $img->crop(133, 133, $x, $y);
                    Storage::disk('s3')->put("public/".$color."/".$i.".jpg", $img->encode(), 'public');
                    $x+=133;
                    if ($i%3==0){
                        $y+=133;
                        $x=0;
                    }
                }


            }
            $mensaje = semaforo::find(1);

            if($color==='rojo')
                $mensaje->rojo = $req->mensaje;
            elseif ($color==='amarillo')
                $mensaje->amarillo = $req->mensaje;
            else
                $mensaje->verde = $req->mensaje;

            $mensaje->save();



        }

        public function mensajesSemaforo(){
            $mensajes=semaforo::find(1);
            return $mensajes;
        }

}
