<?php

namespace App\Http\Controllers;

use App\Role;
use App\semaforo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            return view('landingPage/actividadesjuegos.niños.actividadUno.cuentos.niño');
        }
        //cuento de niña
        public function girl()
        {
            return view('landingPage/actividadesjuegos.niños.actividadUno.cuentos.niña');
        }
        public function roluno()
        {
            return view('landingPage/actividadesjuegos.niños.roles.roluno');
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
            public function lbt(){
                return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.lbt');

            }
        public function autoconocimiento(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.autoconocimiento');

        }
        public function afectividad(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.afectividad');

        }
        public function vidasalud(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.vidasalud');

        }
        public function embarazo(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.embarazo');

        }
        public function its(){
            return view('landingPage/actividadesjuegos.jovenes.hablemosClaro.its');

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
            $mensajes=semaforo::find(1);
            $rol=DB::table('roles')->where('rol', '!=','0')->get();;

            return view('admin.actividadesJuegos.niño.actividaddos.niño',['message'=>$mensajes,'rol'=>$rol]);
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
            if(strlen( $req->image)>200 ){

                $image=$this->Uploadfile($req->image);

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

        //rol
        public function rolPost(Request $request)
        {

            if (strlen($request->imagenUno) > 200) {
                $imageu=$this->Uploadfile($request->imagenUno);
                $url=$imageu->storeAs(
                    'public/rol/'.$request->rol, 'img1.png','s3'
                );
                Storage::disk('s3')->setVisibility($url, 'public');

            }

            if (strlen($request->imagenDos) > 200) {
                $imageu=$this->Uploadfile($request->imagenDos);
                $url=$imageu->storeAs(
                    'public/rol/'.$request->rol, 'img2.png','s3'
                );
                Storage::disk('s3')->setVisibility($url, 'public');
            }
return ;
        }
    public function Uploadfile($imagen){
        $config = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen));
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
        return $image;
    }

}
