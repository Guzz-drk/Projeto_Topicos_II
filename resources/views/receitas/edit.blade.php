@extends('adminlte::page')

@section('content')
    <h3>Editando Receita: {{ $receitas->id }}</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => ['receitas.update', 'id' => $receitas->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('lupulo_id', 'Lupulo:') !!}
        {!! Form::select(
            'lupulo_id',
            \App\Models\Lupulo::orderBy('nome')->pluck('nome', 'id')->toArray(),
            $receitas->lupulo_id,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('malte_id', 'Lupulo:') !!}
        {!! Form::select(
            'malte_id',
            \App\Models\Malte::orderBy('nome')->pluck('nome', 'id')->toArray(),
            $receitas->malte_id,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estiloLeva_id', 'Lupulo:') !!}
        {!! Form::select(
            'estiloLeva_id',
            \App\Models\estiloLeva::orderBy('tipo_leva')->pluck('tipo_leva', 'id')->toArray(),
            $receitas->estiloLeva_id,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
