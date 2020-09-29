<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\File;
use App\Image;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function storage(Request $request)
    {
        $config=base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$request->fotos));
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

        $var = Storage::disk('s3')->put("public/carrusel", $image, 'public');
        $url = Storage::disk('s3')->url('/');


        return Image::create([
            'url' => $var
        ]);
        //return $url. $var;
    }

    public function getData()
    {
        $datos = Image::all();

        return $datos;
    }
}
