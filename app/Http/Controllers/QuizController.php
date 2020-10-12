<?php

namespace App\Http\Controllers;

use App\Option;
use App\Optionnina;
use App\Question;
use App\Questionnina;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function nino()
    {
        return view('landingPage.actividadesjuegos.niños.actividadUno.juegoPreguntas.preguntasninos');
    }

    public function nina()
    {
        return view('landingPage.actividadesjuegos.niños.actividadUno.juegoPreguntas.preguntasninas');
    }

    public function listaRadios()
    {
        $radios = Option::with('question')->where('type', 'radio')->get();

        return $radios;
    }

    public function listaRadiosNina()
    {
        $radios = Optionnina::with('question')->where('type', 'radio')->get();

        return $radios;
    }

    public function listaText()
    {
        $text = Option::with('question')->where('type', 'text')->get();

        return $text;
    }

    public function listaTextNina()
    {
        $text = Optionnina::with('question')->where('type', 'text')->get();

        return $text;
    }

    public function listaPreguntas()
    {
        $question = Question::all();

        return $question;
    }

    public function listaPreguntasNina()
    {
        $question = Questionnina::all();

        return $question;
    }

    public function maximo()
    {
        $count = Question::count();

        return $count;
    }

    public function maximoNina()
    {
        $count = Questionnina::count();

        return $count;
    }

    public function resultados(Request $request)
    {
        //dd($request->all());
        $respuestas = $request->all();
        return view('landingPage.actividadesjuegos.niños.actividadUno.juegoPreguntas.resultados', ['respuestas'=>$respuestas]);
    }
}
