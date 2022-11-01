@extends('layouts.default')
@section('content')
    <h1>Lupulos</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Nome
            </th>
            <th>
                Descrição
            </th>
            <th>
                Origem
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            @foreach ($lupulos as $lupulo)
                <tr>
                    <td>
                        {{ $lupulo->nome }}
                    </td>
                    <td>
                        {{ $lupulo->descricao }}
                    </td>
                    <td>
                        {{ $lupulo->origem }}
                    </td>
                    <td>
                        <a href="{{ route('lupulos.edit', ['id' => $lupulo->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $lupulo->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('lupulos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "lupulos"
@endsection
