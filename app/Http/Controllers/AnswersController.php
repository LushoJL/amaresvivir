<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use  Illuminate\Support\Arr;
class AnswersController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = json_decode($request->getContent());
        //$datos = Arr::flatten($data);

        for ($i = 0; $i < 7; $i++)
        {

        }
        Answer::create([

        ]);
    }
}
