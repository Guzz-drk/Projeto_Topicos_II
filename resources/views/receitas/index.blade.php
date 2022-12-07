@extends('layouts.default')
@section('content')
<br>
    <h1 style="text-align: center">Receitas</h1>

    <table class="table table-striped table-bordered table-hover" style="text-align: center">
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
                        {{ isset($receita->lupulo->nome) ? $receita->lupulo->nome : 'Lupulo não encontrado' }}
                    </td>
                    <td>
                        {{ isset($receita->malte->nome) ? $receita->malte->nome : 'Malte não encontrado' }}
                    </td>
                    <td>
                        {{ isset($receita->estiloLeva->descricao) ? $receita->estiloLeva->descricao : 'Estilo de Leva não encontrado' }}
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
