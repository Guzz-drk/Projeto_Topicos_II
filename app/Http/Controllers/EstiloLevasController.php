<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstiloLevaRequest;
use App\Models\EstiloLeva;
use Illuminate\Http\Request;

class EstiloLevasController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $estiloLevas = EstiloLeva::orderBy('tipo_leva')->paginate(5);
        else
            $estiloLevas = EstiloLeva::where('tipo_leva', 'like', '%'.$filtragem.'%')
                ->orderBy("tipo_leva")
                ->paginate(5)
                ->setPath('?desc_filtro='.$filtragem);
        return view('estiloLevas.index', ['estiloLevas' => $estiloLevas]);
    }
    public function create()
    {
        return view('estiloLevas.create');
    }
    public function store(EstiloLevaRequest $request)
    {
        $estiloLevas = $request->all();
        EstiloLeva::create($estiloLevas);
        return redirect()->route('estiloLevas');
    }


    public function destroy($id)
    {
        try {
            EstiloLeva::find($id)->delete();
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
        $estiloLevas = EstiloLeva::find($id);
        return view('estiloLevas.edit', compact('estiloLevas'));
    }

    public function update(EstiloLevaRequest $request, $id)
    {
        EstiloLeva::find($id)->update($request->all());
        return redirect()->route('estiloLevas');
    }
}