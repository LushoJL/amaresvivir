<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     *LANDING PAGE
     */
    public function index()
    {
        return view('landingPage/noticias.index');
    }
    public function article()
    {
        return view('landingPage/noticias.articulo');
    }

    /**
     * ADMIN
     */

    public function indexAdmin()
    {
        return view('admin.noticias.noticias');
    }
}
