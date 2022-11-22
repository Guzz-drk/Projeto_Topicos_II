@extends('layouts.default')
@section('content')
    <h1>Malte-Levas</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Quantidade de Malte
            </th>
            <th>
                Malte
            </th>
            <th>
                Leva
            </th>
        </thead>
        <tbody>
            @foreach ($malteLevas as $malteLeva)
                <tr>
                    <td>
                        {{ $malteLeva->qtd }} Quilos
                    </td>
                    <td>
                        {{ isset($malteLeva->id_leva->id) ? $malteLeva->id_leva->id : 'Leva não encontrado' }}
                    </td>
                    <td>
                        {{ isset($malteLeva->id_malte->id) ? $malteLeva->id_malte->id : 'Malte não encontrado' }}
                    <td>
                        <a href="{{ route('malteLevas.edit', ['id' => $malteLeva->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $malteLeva->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('malteLevas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "malteLevas"
@endsection
