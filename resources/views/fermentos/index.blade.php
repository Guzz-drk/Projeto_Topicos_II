@extends('adminlte::page')
@section('content')
    <h1>Fermentos</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Nome
            </th>
            <th>
                Marca
            </th>
            <th>
                Descrição
            </th>
        </thead>
        <tbody>
            @foreach ($fermentos as $fermento)
                <tr>
                    <td>
                        {{ $fermento->nome }}
                    </td>
                    <td>
                        {{ $fermento->marca }}
                    </td>
                    <td>
                        {{ $fermento->descricao }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
