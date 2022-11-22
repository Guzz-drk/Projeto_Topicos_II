@extends('layouts.default')
@section('content')
    <h1>Receita</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Lupulo
            </th>
            <th>
                Malte
            </th>
            <th>
                Estilo de Leva
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            @foreach ($receitas as $receita)
                <tr>
                    <td>
                        {{ isset($receita->lupulo_id->id) ? $receita->lupulo_id->id : 'Lupulo não encontrado' }}
                    </td>
                    <td>
                        {{ isset($receita->malte_id->id) ? $receita->malte_id->id : 'Malte não encontrado' }}
                    </td>
                    <td>
                        {{ isset($receita->estiloLeva_id->id) ? $receita->estiloLeva_id->id : 'Estilo de Leva não encontrado' }}
                    </td>
                    <td>
                        <a href="{{ route('receitas.edit', ['id' => $receita->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $receita->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('receitas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "receitas"
@endsection
