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
    public function create()
    {
        return view('fermentos.create');
    }
    public function store(FermentoRequest $request)
    {
        $fermentos = $request->all();
        Fermento::create($fermentos);
        return redirect()->route('fermentos');
    }


    public function destroy($id)
    {
        Fermento::find($id)->delete();
        return redirect()->route('fermentos');
    }

    public function edit($id)
    {
        $fermentos = Fermento::find($id);
        return view('fermentos.edit', compact('fermentos'));
    }

    public function update(FermentoRequest $request, $id)
    {
        Fermento::find($id)->update($request->all());
        return redirect()->route('fermentos');
    }
}