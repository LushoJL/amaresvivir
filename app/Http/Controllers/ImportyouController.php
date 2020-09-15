<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportyouController extends Controller
{
    /**
     *LANDING PAGE
     */
    public function index()
    {
        return view('landingPage/tuNosImportas.index');
    }

    /**
     * ADMIN
     */

    public function indexAdmin()
    {
        return view('admin.tuNosImportas.nosimportas');
    }
}
