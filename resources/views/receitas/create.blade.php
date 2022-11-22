@extends('adminlte::page')
@section('content')
    <h3>Receitas</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'receitas.store']) !!}

    <div class="form-group">
        {!! Form::label('lupulo_id', 'Leva:') !!}
        {!! Form::select(
            'lupulo_id',
            \App\Models\Lupulo::orderBy('nome')->pluck('nome', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('malte_id', 'Leva:') !!}
        {!! Form::select(
            'malte_id',
            \App\Models\Malte::orderBy('nome')->pluck('nome', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('estiloLeva_id', 'Leva:') !!}
        {!! Form::select(
            'estiloLeva_id',
            \App\Models\estiloLeva::orderBy('tipo_leva')->pluck('tipo_leva', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Criar Receita', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
