<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * LANDING PAGE
     */
    public function mission()
    {
        return view('landingPage/aboutUs.mission');
    }

    public function vision()
    {
        return view('landingPage/aboutUs.vision');
    }

    public function philosophy()
    {
        return view('landingPage/aboutUs.philosophy');
    }

    public function institutionalObjectives()
    {
        return view('landingPage/aboutUs.institutionalObjectives');
    }

    public function organizationChart()
    {
        return view('landingPage/aboutUs.organizationChart');
    }

    /**
     * ADMIN
     */

    public function missionAdmin()
    {
        return view('admin/quienesSomos.mision');
    }

    public function visionAdmin()
    {
        return view('admin/quienesSomos.vision');
    }

    public function philosophyAdmin()
    {
        return view('admin/quienesSomos.filosofia');
    }

    public function institutionalObjectivesAdmin()
    {
        return view('admin/quienesSomos.objetivos');
    }

    public function organizationChartAdmin()
    {
        return view('admin/quienesSomos.organigrama');
    }
}
