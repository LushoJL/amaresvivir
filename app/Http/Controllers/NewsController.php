<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\News;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\File;

class NewsController extends Controller
{
    /**
     *LANDING PAGE
     */
    public function index()
    {
        $news = DB::table('news')
        ->select('id', 'image', 'author', 'title', 'body', 'created_at')
        ->orderBy('created_at', 'DESC')
        ->paginate(5);
        //dd($news);
        return view('landingPage/noticias.index', compact('news'));
    }

    public function article($id)
    {
        $news = DB::table('news')
        ->where('id', $id)
        ->get();
        return view('landingPage/noticias.articulo', compact('news'));
    }

    /**
     * ADMIN
     */

    public function indexAdmin()
    {
        return view('admin.noticias.noticias');
    }

    public function store(Request $request)
    {
        $config=base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$request->image));
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

        $var = Storage::disk('s3')->put("public/noticias", $image, 'public');
        $url = Storage::disk('s3')->url('/');


        return News::create([
            'image' => $var,
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body
            ]);
        //News::create($request->all());
    }

    public function obtenerDatos()
    {
        $news = DB::table('news')
            ->select('id', 'image', 'author', 'title', 'created_at')
            ->orderBy('created_at', 'DESC')
            ->get();

        return $news;
    }

    public function destroy(Request $request)
    {
        $borrar = News::destroy($request->id);

        if ($borrar)
        {
            Storage::disk('s3')->delete($request->image);
        }
        return $borrar;
    }
}
