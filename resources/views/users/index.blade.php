@extends('layouts.default')
@section('content')
    <h1>Usuarios</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Nome
            </th>
            <th>
                Descrição
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
    <a href="{{ route('users.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "users"
@endsection
