<?php

namespace App\Http\Controllers;
use App\Http\Requests\MalteLevasRequest;
use App\Models\MalteLeva;
use Illuminate\Http\Request;

class MalteLevasController extends Controller
{
    public function index(){
        $malteLevas = MalteLeva::all();
        return view('malteLevas.index', ['malteLevas' => $malteLevas]);
    }

    public function create(){
        return view('malteLevas.create');
    }

    public function store(MalteLevasRequest $request){
        $malteLevas = $request->all();
        MalteLeva::create($malteLevas);
        return redirect()->route('malteLevas');
    }

    public function destroy($id){
        try {
            MalteLeva::find($id)->delete();
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
        $malteLevas = MalteLeva::find($id);
        return view('malteLevas.edit', compact('malteLevas'));
    }

    public function update(MalteLevasRequest $request, $id){
        MalteLeva::find($id)->update($request->all());
        return redirect()->route('malteLevas');
    }
}