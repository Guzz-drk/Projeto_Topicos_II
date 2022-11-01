<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevaRequest;
use App\Models\Leva;
use Illuminate\Http\Request;

class LevasController extends Controller
{
    public function index()
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