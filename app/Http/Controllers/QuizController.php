<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Option;
use App\Optionnina;
use App\Question;
use App\Questionnina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        unset($request['_token']);
        //var_export($request);
        //dd($request->all());
        $valor = implode(",", $request->all());

        //dd($valor);
        Answer::create([
            'description' => $valor
        ]);

        return view('landingPage/actividadesjuegos.niños.actividadDos.semaforo');
    }
}
