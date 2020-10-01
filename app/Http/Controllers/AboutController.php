<?php

namespace App\Http\Controllers;

use App\About;

use App\semaforo;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\File;

class AboutController extends Controller
{
    /**
     * LANDING PAGE
     */
    public function mission()
    {
        return view('landingPage/aboutUs.mission',['dato'=>About::find(1)]);
    }

    public function vision()
    {
        return view('landingPage/aboutUs.vision',['dato'=>About::find(1)]);
    }

    public function philosophy()
    {
        return view('landingPage/aboutUs.philosophy',['dato'=>About::find(1)]);
    }

    public function institutionalObjectives()
    {
        return view('landingPage/aboutUs.institutionalObjectives',['dato'=>About::find(1)]);
    }

    public function organizationChart()
    {
        return view('landingPage/aboutUs.organizationChart',['dato'=>About::find(1)]);
    }

    /**
     * ADMIN
     */

    public function indexAdmin()
    {
        return view('admin/quienesSomos.index');
    }
    public function requestdatos(){
            return About::find(1);
    }
    public function GuardarDatos(Request $request)
    {
        $datos = About::find(1);
        $url =$datos->ornigrama;

        if (strlen($request->ornigrama) > 200) {
            $config = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->ornigrama));
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
          $url =Storage::disk('s3')->put("public/organigrama", $image, 'public');

        }


        $datos->update([
            'mision'=>$request->mision,
            'vision'=>$request->vision,
            'filosofia'=>$request->filosofia,
            'objetivo'=>$request->objetivo,
            'ornigrama'=>$url
        ]);

        return ;
    }
}
