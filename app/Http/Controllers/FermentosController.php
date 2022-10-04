<?php

namespace App\Http\Controllers;

use App\Http\Requests\FermentoRequest;
use App\Models\Fermento;
use Illuminate\Http\Request;

class FermentosController extends Controller
{
    public function index()
    {
        $fermentos = Fermento::all();
        return view('fermentos.index', ['fermentos' => $fermentos]);
    }
    public function create(){
        return view('fermentos.create');
    }
    public function store(FermentoRequest $request){
        $fermentos = $request->all();
        Fermento::create($fermentos);
        return redirect('fermentos');
    }
}
