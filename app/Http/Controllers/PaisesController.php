<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pais;

class PaisesController extends Controller
{
    public function indexP(){
        $paises= Pais::all();
        return view('paises.indexPais', compact('paises'));
    }

    public function crearP(){
        return view('paises.crearPais');
    }
}
