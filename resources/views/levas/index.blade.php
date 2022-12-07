@extends('layouts.default')
@section('content')
<br>
    <h1 style="text-align: center">Levas</h1>
    <br>
    <table class="table table-striped table-bordered table-hover" style="text-align: center">
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
                Água/l
            </th>
            <th>
                Fermento/g
            </th>
            <th>
                Fermento
            </th>
            <th>
                Lupulo
            </th>
            <th>
                Malte
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
                        {{ $leva->fervura_inicial }} Celsius
                    </td>
                    <td>
                        {{ $leva->tempo_fervura }}
                    </td>
                    <td>
                        {{ $leva->tempo_fervura_final }}
                    </td>
                    <td>
                        {{ $leva->qtd_agua }} litros
                    </td>
                    <td>
                        {{ $leva->qtd_fermento }} gramas
                    </td>
                    <td>
                        {{ isset($leva->fermentos->nome) ? $leva->fermentos->nome : 'Fermento não encontrado' }}
                    </td>
                    <td>
                        {{ isset($leva->lupulos->nome) ? $leva->lupulos->nome : 'Lupulo não encontrado' }}
                    </td>
                    <td>
                        @foreach ($leva->malteLevas as $m)
                            <li style="list-style-type: none">{{$m->malte->nome}}</li>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('levas.edit', ['id' => $leva->id]) }}" class="btn-sm btn-success">Editar</a>
                        <p></p>
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
