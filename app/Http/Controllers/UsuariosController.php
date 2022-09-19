<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios', ['usuarios' => $usuarios]);
    }
}
