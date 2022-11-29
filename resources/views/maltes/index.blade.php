@extends('layouts.default')
@section('content')
    <h1>Maltes</h1>
    {!! Form::open(['name' => 'form_name', 'route' => 'maltes']) !!}
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
                Nome
            </th>
            <th>
                Descrição
            </th>
            <th>
                Ações
            </th>
        </thead>
        <tbody>
            @foreach ($maltes as $malte)
                <tr>
                    <td>
                        {{ $malte->nome }}
                    </td>
                    <td>
                        {{ $malte->descricao }}
                    </td>
                    <td>
                        <a href="{{ route('maltes.edit', ['id' => $malte->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $malte->id }})"
                            class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('maltes.create', []) }}" class="btn btn-info">Adicionar</a>
@stop
@section('table-delete')
    "maltes"
@endsection
