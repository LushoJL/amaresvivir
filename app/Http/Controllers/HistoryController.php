<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * LANDING PAGE
     */
    public function index()
    {
        return view('landingPage/tuHistoria.index');
    }

    /**
     * ADMIN
     */
    public function indexAdmin()
    {
        return view('admin.tuHistoria.historia');
    }
}
