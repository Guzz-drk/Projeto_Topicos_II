@extends('layouts.default')
@section('content')
    <h1>Levas</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Data de Fabricação
            </th>
            <th>
                Fervura Inicial
            </th>
            <th>
                Tempo de Fervura
            </th>
            <th>
                Tempo de Fervura Final
            </th>
            <th>
                Quantidade de Água / L
            </th>
            <th>
                Quantidade de Fermento / G
            </th>
            <th>
                Fermento
            </th>
            <th>
                Lupulo
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            @foreach ($levas as $leva)
                <tr>
                    <td>
                        {{ \Carbon\Carbon::parse($leva->dt_fabricacao)->format('d/m/Y') }}

                    </td>
                    <td>
                        {{ $leva->fervura_inicial }}
                    </td>
                    <td>
                        {{ $leva->tempo_fervura }}
                    </td>
                    <td>
                        {{ $leva->tempo_fervura_final }}
                    </td>
                    <td>
                        {{ $leva->qtd_agua }}
                    </td>
                    <td>
                        {{ $leva->qtd_fermento }}
                    </td>
                    <td>
                        {{ isset($leva->fermentos->nome) ? $leva->fermentos->nome : 'Fermento não encontrado' }}
                    </td>
                    <td>
                        {{ isset($leva->lupulos->nome) ? $leva->lupulos->nome : 'Lupulo não encontrado' }}
                    </td>
                    <td>
                        <a href="{{ route('levas.edit', ['id' => $leva->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $leva->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('levas.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "levas"
@endsection
