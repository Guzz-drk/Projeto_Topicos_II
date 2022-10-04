@extends('adminlte::page')
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
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
