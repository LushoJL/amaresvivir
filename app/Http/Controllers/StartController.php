<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $datos = Image::all();
        return view('landingPage/welcome', ['datos'=>$datos]);
    }
}
