@extends('layouts.default')
@section('content')
    <h1>Levas</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Tipo Leva
            </th>
            <th>
                Descrição
            </th>
            <th>
                Leva
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            @foreach ($estiloLevas as $estiloLeva)
                <tr>
                    <td>
                        {{ $estiloLeva->tipo_leva }}
                    </td>
                    <td>
                        {{ $estiloLeva->descricao }}
                    </td>
                    <td>
                        {{ isset($estiloLeva->leva_id->id) ? $estiloLeva->leva_id->id : 'Leva não encontrado' }}
                    </td>
                    <td>
                        <a href="{{ route('estiloLevas.edit', ['id' => $estiloLeva->id]) }}"
                            class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $estiloLeva->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('estiloLevas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "estiloLevas"
@endsection
