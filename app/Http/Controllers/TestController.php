<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * LANDIG PAGE
     */
    public function index()
    {
        return view('landingPage/test.index');
    }

    /**
     * ADMIN
     */
    public function indexAdmin()
    {
        return view('admin.test.test');
    }
}
