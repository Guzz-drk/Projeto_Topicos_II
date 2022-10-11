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
    public function create()
    {
        return view('users.create');
    }
    public function store(UserRequest $request)
    {
        $user = $request->all();
        User::create($user);
        return redirect()->route('users');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        // dd($user->name);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect()->route('users');
    }
}