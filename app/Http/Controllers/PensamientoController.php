<?php

namespace App\Http\Controllers;
use App\Pensamiento;
use App\User;
use Illuminate\Http\Request;

class PensamientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       return Pensamiento::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $pensamiento = new Pensamiento();
        $pensamiento->description = $request->description;
        $pensamiento->user_id = auth()->id();
        $pensamiento->save();
        return $pensamiento;
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
                $pensamiento=Pensamiento::find($id);
                $pensamiento->description=$request->description;
                $pensamiento->save();
                return $pensamiento;
    }

    public function destroy($id)
    {
        $pensamiento=Pensamiento::find($id);
        $pensamiento->delete();
    }
}
