<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(UserRequest $request){
        $user = $request->all();
        User::create($user);
        return redirect('users');
    }
}
