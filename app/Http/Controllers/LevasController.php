<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevaRequest;
use App\Models\Leva;
use App\Models\MalteLeva;
use Illuminate\Http\Request;

class LevasController extends Controller
{
    public function index(Request $filtro)
    {
        $levas = Leva::all();
        return view('levas.index', ['levas' => $levas]);
    }

    public function create()
    {
        return view('levas.create');
    }
    public function store(LevaRequest $request)
    {
        $levas = Leva::create([
            'dt_fabricacao' => $request->get('dt_fabricacao'),
            'fervura_inicial' => $request->get('fervura_inicial'),
            'tempo_fervura' => $request->get('tempo_fervura'),
            'qtd_agua' => $request->get('qtd_agua'),
            'qtd_fermento' => $request->get('qtd_fermento'),
            'fermentos_id' => $request->get('fermentos_id'),
            'lupulos_id' => $request->get('lupulos_id'),
            'tempo_fervura_final' => $request->get('tempo_fervura_final'),
        ]);

        $maltes = $request->maltes;
        foreach($maltes as $m => $value){
            MalteLeva::create([
                'id_malte' => $maltes[$m],
                'id_leva' => $levas->id,
                'qtd' => $value,
            ]);
        }
        return redirect()->route('levas');
    }


    public function destroy($id)
    {
        try {
            Leva::find($id)->delete();
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
        $levas = Leva::find($id);
        return view('levas.edit', compact('levas'));
    }

    public function update(LevaRequest $request, $id)
    {
        Leva::find($id)->update($request->all());
        return redirect()->route('levas');
    }
}
