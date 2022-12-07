@extends('layouts.default')
@section('content')
<br>
    <h1 style="text-align: center">Malte-Levas</h1>

    <table class="table table-striped table-bordered table-hover" style="text-align: center">
        <thead>
            <th>
                Quantidade de Malte
            </th>
            <th>
                Leva
            </th>
            <th>
                Malte
            </th>
        </thead>
        <tbody>
            @foreach ($malteLevas as $malteLeva)
                <tr>
                    <td>
                        {{ $malteLeva->qtd }} Quilos
                    </td>
                    <td>
                        {{ isset($malteLeva->leva->fermentos) ? $malteLeva->leva->fermentos->descricao : 'Leva não encontrado' }}
                    </td>
                    <td>
                        {{ isset($malteLeva->malte->nome) ? $malteLeva->malte->nome : 'Malte não encontrado' }}
                    </td>
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
