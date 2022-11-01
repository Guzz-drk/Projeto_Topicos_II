<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');
        if($filtragem == null)
            $user = User::orderBy('name')->paginate(10);
        else
            $user = User::where('name', 'like', '%'.$filtragem.'%')->orderBy('name')->paginate(10)->setpath('users?desc_filtro='.$filtragem);
            return view('users.index', ['users' => $user]);
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
        try {
            User::find($id)->delete();
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