<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReceitaRequest;
use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitasController extends Controller
{
    public function index(){
        $receitas = Receita::all();
        return view('receitas.index', ['receitas' => $receitas]);
    }

    public function create(){
        return view('receitas.create');
    }

    public function store(ReceitaRequest $request){
        $receitas = $request->all();
        Receita::create($receitas);
        return redirect()->route('receitas');
    }

    public function destroy($id){
        try {
            Receita::find($id)->delete();
            $ret = array('status' => 200, 'msg' => null);
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $receitas = Receita::find($id);
        return view('receitas.edit', compact('receitas'));
    }

    public function update(Request $request, $id){
        Receita::find($id)->update($request->all());
        return redirect()->route('receitas');
    }
}