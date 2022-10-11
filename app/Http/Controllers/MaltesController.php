<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaltesRequest;
use Illuminate\Http\Request;
use App\Models\Malte;

class MaltesController extends Controller
{
    public function index()
    {
        $maltes = Malte::all();
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
        Malte::find($id)->delete();
        return redirect()->route('maltes');
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