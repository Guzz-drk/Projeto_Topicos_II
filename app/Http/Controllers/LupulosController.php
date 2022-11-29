<?php

namespace App\Http\Controllers;

use App\Http\Requests\LupuloRequest;
use App\Models\Lupulo;
use Illuminate\Http\Request;

class LupulosController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $lupulos = Lupulo::orderBy('nome')->paginate(5);
        else
            $lupulos = Lupulo::where('nome', 'like', '%'.$filtragem.'%')
                ->orderBy("nome")
                ->paginate(5)
                ->setPath('?desc_filtro='.$filtragem);
        return view('lupulos.index', ['lupulos' => $lupulos]);
    }
    public function create()
    {
        return view('lupulos.create');
    }
    public function store(LupuloRequest $request)
    {
        $lupulos = $request->all();
        Lupulo::create($lupulos);
        return redirect()->route('lupulos');
    }


    public function destroy($id)
    {
        try {
            Lupulo::find($id)->delete();
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
        $lupulos = Lupulo::find($id);
        return view('lupulos.edit', compact('lupulos'));
    }

    public function update(LupuloRequest $request, $id)
    {
        Lupulo::find($id)->update($request->all());
        return redirect()->route('lupulos');
    }
}