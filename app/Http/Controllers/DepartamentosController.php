<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Pais;

class DepartamentosController extends Controller
{
    public function indexD(){
        $departamentos= Departamento::all();
        return view('departamentos.indexDepartamento', compact('departamentos'));
    }

    public function crearD(){
        $paises=Pais::all();
        return view('departamentos.crearDepartamento', compact('paises'));
    }

    public function storeP(Request $request){
        Departamento::create($request->all());
        return redirect()->route('inicioDep');
    }
}
