<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Malte;

class MaltesController extends Controller
{
    public function index()
    {
        $maltes = Malte::all();
        return view('maltes', ['maltes' => $maltes]);
    }
}
