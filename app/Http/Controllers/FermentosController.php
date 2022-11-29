<?php

namespace App\Http\Controllers;

use App\Http\Requests\FermentoRequest;
use App\Models\Fermento;
use Illuminate\Http\Request;

class FermentosController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $fermentos = Fermento::orderBy('nome')->paginate(5);
        else
            $fermentos = Fermento::where('nome', 'like', '%'.$filtragem.'%')
                ->orderBy("nome")
                ->paginate(5)
                ->setPath('?desc_filtro='.$filtragem);
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
        try {
            Fermento::find($id)->delete();
            $ret = array('status' => 200, 'msg' => null);
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
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