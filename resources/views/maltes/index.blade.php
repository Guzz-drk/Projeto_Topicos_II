@extends('layouts.default')
@section('content')
    <h1>Maltes</h1>

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
            @foreach ($maltes as $malte)
                <tr>
                    <td>
                        {{ $malte->nome }}
                    </td>
                    <td>
                        {{ $malte->descricao }}
                    </td>
                    <td>
                        <a href="{{ route('maltes.edit', ['id' => $malte->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $malte->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('maltes.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "maltes"
@endsection
