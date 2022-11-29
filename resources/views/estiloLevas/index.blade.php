@extends('layouts.default')
@section('content')
    <h1>Estilo de Levas</h1>
    {!! Form::open(['name' => 'form_name', 'route' => 'estiloLevas']) !!}
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
                        {{ isset($estiloLeva->leva->id) ? $estiloLeva->leva->id : 'Leva não encontrado' }}
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
