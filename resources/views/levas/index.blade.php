@extends('layouts.default')
@section('content')
    <h1>Levas</h1>
    {!! Form::open(['name' => 'form_name', 'route' => 'levas']) !!}
    <div class="sidebar-form">
        <div class="input-group">
            <input type="text" name="desc_filtro" class="form-control" style="width: 90% !important;"
                placeholder="Pesquisar...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
    <br>
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
                        {{ $leva->qtd_agua }} litro
                    </td>
                    <td>
                        {{ $leva->qtd_fermento }} grama
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
