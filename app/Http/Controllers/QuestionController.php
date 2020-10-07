<?php

namespace App\Http\Controllers;

use App\Option;
use App\Optionnina;
use App\Question;
use App\Questionnina;
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

    }

    public function update(Request $request, $id)
    {
        Question::find($id)->update($request->all());
    }

    public function updateNina(Request $request, $id)
    {
        Questionnina::find($id)->update($request->all());
    }

    public function destroy(Request $request, $id)
    {
        Question::find($id)->delete();
    }

    public function destroyNina(Request $request, $id)
    {
        Questionnina::find($id)->delete();
    }

    public function storeNina(Request $request)
    {
        Questionnina::create($request->all());
    }

    public function listaPreguntas()
    {
        $preguntas = Question::all();

        return $preguntas;
    }

    public function listaPreguntasNina()
    {
        $preguntasN = Questionnina::all();

        return $preguntasN;
    }

    public function  storeOption(Request $request)
    {
        Option::create($request->all());
    }

    public function updateOption(Request $request, $id)
    {
        Option::find($id)->update($request->all());
    }

    public function storeOptionNina(Request $request)
    {
        Optionnina::create($request->all());
    }

    public function updateOptionNina(Request $request, $id)
    {
        Optionnina::find($id)->update($request->all());
    }

    public function listaOpciones()
    {
        $opciones = Option::with('question')->orderBy('position_id', 'ASC')->get();

        return $opciones;
    }

    public function opcionesNina()
    {
        $opcionesN = Optionnina::with('question')->orderBy('position_id', 'ASC')->get();

        return $opcionesN;
    }

    public function destroyOption(Request $request, $id)
    {
        Option::find($id)->delete();
    }

    public function destroyOptionNina(Request $request, $id)
    {
        Optionnina::find($id)->delete();
    }

}
