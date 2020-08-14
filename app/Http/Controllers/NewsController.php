<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('noticias.index');
    }
    public function article()
    {
        return view('noticias.articulo');
    }
}
