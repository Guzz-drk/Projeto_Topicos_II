@extends('layouts.default')
@section('content')
    <h1>Usuarios</h1>
    {!! Form::open(['name' => 'form_name', 'route' => 'users']) !!}
    <div class="sidebar-form">
        <div class="input-group">
            <input type="text" name="desc_filtro" class="form-control" style="width:90% !important;"
                placeholder="Pesquisar...">
            <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-default"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        <br>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Ações
                </th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn-sm btn-success">Editar</a>
                            <a href="#" onclick="return ConfirmaExclusao({{ $user->id }})"
                                class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-4') }}
        <a href="{{ route('users.create', []) }}" class="btn btn-info">Adicionar</a>
    @stop
    @section('table-delete')
        "users"
    @endsection
