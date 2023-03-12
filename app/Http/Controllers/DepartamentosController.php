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

    public function storeD(Request $request){
        Departamento::create($request->all());
        return redirect()->route('inicioDep');
    }

    public function editarD ($id){
        $departamento = Departamento::find($id);
        $paises=Pais::all();
        return view('departamentos.editarDepartamento', compact('departamento'), compact('paises'));
    }

    public function updateD (Request $request, $id){
        Departamento::find($id)->update($request->all());
        return redirect()->route('inicioDep');
    }

    public function eliminarD($id){
        Departamento::find($id)->delete();
        return redirect()->route('inicioDep');
    }
}
