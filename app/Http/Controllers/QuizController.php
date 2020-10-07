<?php

namespace App\Http\Controllers;

use App\Option;
use App\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function nino()
    {
        return view('landingPage.actividadesjuegos.niños.actividadUno.juegoPreguntas.preguntasninos');
    }

    public function listaRadios()
    {
        $radios = Option::with('question')->where('type', 'radio')->get();

        return $radios;
    }

    public function listaText()
    {
        $text = Option::with('question')->where('type', 'text')->get();

        return $text;
    }

    public function listaPreguntas()
    {
        $question = Question::all();

        return $question;
    }

    public function maximo()
    {
        $count = Question::count();

        return $count;
    }
}
