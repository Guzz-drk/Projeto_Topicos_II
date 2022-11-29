<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaltesRequest;
use Illuminate\Http\Request;
use App\Models\Malte;

class MaltesController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $maltes = Malte::orderBy('nome')->paginate(5);
        else
            $maltes = Malte::where('nome', 'like', '%'.$filtragem.'%')
                ->orderBy("nome")
                ->paginate(5)
                ->setPath('?desc_filtro='.$filtragem);
        return view('maltes.index', ['maltes' => $maltes]);
    }
    public function create()
    {
        return view('maltes.create');
    }
    public function store(MaltesRequest $request)
    {
        $maltes = $request->all();
        Malte::create($maltes);
        return redirect()->route('maltes');
    }

    public function destroy($id)
    {
        try {
            Malte::find($id)->delete();
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
        $maltes = Malte::find($id);
        return view('maltes.edit', compact('maltes'));
    }

    public function update(MaltesRequest $request, $id)
    {
        Malte::find($id)->update($request->all());
        return redirect()->route('maltes');
    }
}