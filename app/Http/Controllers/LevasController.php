<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevaRequest;
use App\Models\Leva;
use Illuminate\Http\Request;

class LevasController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $levas = Leva::orderBy('dt_fabricacao')->paginate(5);
        else
            $levas = Leva::where('dt_fabricacao', 'like', '%'.$filtragem.'%')
                ->orderBy("dt_fabricacao")
                ->paginate(5)
                ->setPath('?desc_filtro='.$filtragem);
        return view('levas.index', ['levas' => $levas]);
    }

    public function create()
    {
        return view('levas.create');
    }
    public function store(LevaRequest $request)
    {
        $levas = $request->all();
        Leva::create($levas);
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