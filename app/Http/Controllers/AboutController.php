<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function mission()
    {
        return view('aboutUs.mission');
    }

    public function vision()
    {
        return view('aboutUs.vision');
    }

    public function philosophy()
    {
        return view('aboutUs.philosophy');
    }

    public function institutionalObjectives()
    {
        return view('aboutUs.institutionalObjectives');
    }

    public function organizationChart()
    {
        return view('aboutUs.organizationChart');
    }
}
