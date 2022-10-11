@extends('adminlte::page')

@section('content')
    <h3>Editando Malte: {{ $maltes->nome }}</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => ['maltes.update', 'id' => $maltes->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $maltes->nome, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', $maltes->descricao, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
