@extends('adminlte::page')
@section('content')
    <h1>Maltes</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <th>
                Nome
            </th>
            <th>
                Descrição
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
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
