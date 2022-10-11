@extends('layouts.default')
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
            <th>
                Ações
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
                    <td>
                        <a href="{{ route('fermentos.edit', ['id' => $fermento->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $fermento->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('fermentos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "fermentos"
@endsection
