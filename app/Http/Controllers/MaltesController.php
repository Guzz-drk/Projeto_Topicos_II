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
    public function store(MaltesRequest $request){
        $maltes = $request->all();
        Malte::create($maltes);
        return redirect('maltes');
    }
}
