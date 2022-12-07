@extends('layouts.default')
@section('content')
<br>
    <h1 style="text-align: center">Lupulos</h1>
    {!! Form::open(['name' => 'form_name', 'route' => 'lupulos']) !!}
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
    <table class="table table-striped table-bordered table-hover" style="text-align: center">
        <thead>
            <th>
                Nome
            </th>
            <th>
                Descrição
            </th>
            <th>
                Origem
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            @foreach ($lupulos as $lupulo)
                <tr>
                    <td>
                        {{ $lupulo->nome }}
                    </td>
                    <td>
                        {{ $lupulo->descricao }}
                    </td>
                    <td>
                        {{ $lupulo->origem }}
                    </td>
                    <td>
                        <a href="{{ route('lupulos.edit', ['id' => $lupulo->id]) }}" class="btn-sm btn-success">Editar</a>
                        <p></p>
                        <a href="#" onclick="return ConfirmaExclusao({{ $lupulo->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('lupulos.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "lupulos"
@endsection
