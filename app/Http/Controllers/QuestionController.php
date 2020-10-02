<?php

namespace App\Http\Controllers;

use App\Option;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index()
    {
        return view('admin.actividadesJuegos.niño.actividaddos.preguntas');
    }

    public function  store(Request  $request)
    {
        Question::create($request->all());

        return ('ok');
    }

    public function listaPreguntas()
    {
        $preguntas = Question::all();

        return $preguntas;
    }

    public function  storeOption(Request $request)
    {
        Option::create($request->all());
    }

    public function listaOpciones()
    {
        $opciones = Option::with('question')->get();

        return $opciones;
    }
}
