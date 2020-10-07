<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  ImportyouController extends Controller
{
    /**
     *LANDING PAGE
     */

    public function saludmental()
    {
        return view('landingPage/tuNosImportas.saludmental');
    }
    public function cuandolloramos()
    {
        return view('landingPage/tuNosImportas.cuandolloramos');
    }
    public function parejasana()
    {
        return view('landingPage/tuNosImportas.parejasana');
    }
    public function sentimientos()
    {
        return view('landingPage/tuNosImportas.sentimientos');
    }

    /**
     * ADMIN
     */

    public function indexAdmin()
    {
        return view('admin.tuNosImportas.nosimportas');
    }
}
