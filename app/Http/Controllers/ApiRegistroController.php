<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class ApiRegistroController extends Controller
{
    //
    public function guarda(Request $request){
        
        request()->validate(Registro::$rules);

        $registro = Registro::create($request->all());

        return response()->json($registro, 200);
    }
    public function index()
    {
        $registros = Registro::all();
        return response()->json($registros, 200);
    }
}
