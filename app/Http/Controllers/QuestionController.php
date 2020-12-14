<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Option;
use App\Optionnina;
use App\Question;
use App\Questionnina;
use Carbon\Carbon;
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
        $preguntas = Question::orderBy('position', 'ASC')->paginate(5);

        return [
            'pagination' => [
                'total' => $preguntas->total(),
                'current_page' => $preguntas->currentPage(),
                'per_page' => $preguntas->perPage(),
                'last_page' => $preguntas->lastPage(),
                'form' => $preguntas->firstItem(),
                'to' => $preguntas->lastPage(),
            ],
            'preguntasP' => $preguntas
        ];
    }

    public function listaPreguntasNina()
    {
        $preguntasN = Questionnina::orderBy('position', 'ASC')->paginate(5);

        return [
            'pagination' => [
                'total' => $preguntasN->total(),
                'current_page' => $preguntasN->currentPage(),
                'per_page' => $preguntasN->perPage(),
                'last_page' => $preguntasN->lastPage(),
                'form' => $preguntasN->firstItem(),
                'to' => $preguntasN->lastPage(),
            ],
            'preguntasN' => $preguntasN
        ];
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

    public function listaOpciones(Request $request)
    {
        $opciones = Option::with('question')->orderBy('position_id', 'ASC')->paginate(5);

        return [
            'pagination' => [
                'total' => $opciones->total(),
                'current_page' => $opciones->currentPage(),
                'per_page' => $opciones->perPage(),
                'last_page' => $opciones->lastPage(),
                'form' => $opciones->firstItem(),
                'to' => $opciones->lastPage(),
            ],
            'opciones' => $opciones
        ];
    }

    public function opcionesNina()
    {
        $opcionesN = Optionnina::with('question')->orderBy('position_id', 'ASC')->paginate(5);

        return [
            'pagination' => [
                'total' => $opcionesN->total(),
                'current_page' => $opcionesN->currentPage(),
                'per_page' => $opcionesN->perPage(),
                'last_page' => $opcionesN->lastPage(),
                'form' => $opcionesN->firstItem(),
                'to' => $opcionesN->lastPage(),
            ],
            'opcionesN' => $opcionesN
        ];
    }

    public function destroyOption(Request $request, $id)
    {
        Option::find($id)->delete();
    }

    public function destroyOptionNina(Request $request, $id)
    {
        Optionnina::find($id)->delete();
    }

    public function listAnswers()
    {
        $respuestas = Answer::orderBy('id', 'DESC')->paginate(5);

        return [
            'pagination' => [
                'total' => $respuestas->total(),
                'current_page' => $respuestas->currentPage(),
                'per_page' => $respuestas->perPage(),
                'last_page' => $respuestas->lastPage(),
                'form' => $respuestas->firstItem(),
                'to' => $respuestas->lastPage(),
            ],
            'respuestas' => $respuestas
        ];
    }

}
