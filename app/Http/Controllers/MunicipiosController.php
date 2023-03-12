<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Departamento;

class MunicipiosController extends Controller
{
    public function indexM(){
        $municipios= Municipio::all();
        return view('municipios.indexMunicipios', compact('municipios'));
    }

    public function crearM(){
        $departamentos=Departamento::all();
        return view('municipios.crearMunicipio', compact('departamentos'));
    }

    public function storeM(Request $request){
        Municipio::create($request->all());
        return redirect()->route('inicioMunicipios');
    }
}
