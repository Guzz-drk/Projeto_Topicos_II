@extends('adminlte::page')
@section('content')
    <h3>Nova Leva</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'levas.store']) !!}
    <div class="form-group">
        {!! Form::label('dt_fabricacao', 'Data Fabricação:') !!}
        {!! Form::date('dt_fabricacao', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fervura_inicial', 'Fervura Inicial:') !!}
        {!! Form::number('fervura_inicial', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tempo_fervura', 'Tempo de Fervura:') !!}
        {!! Form::text('tempo_fervura', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tempo_fervura_final', 'Tempo de Fervura Final:') !!}
        {!! Form::text('tempo_fervura_final', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qtd_agua', 'Quantidade de Água:') !!}
        {!! Form::number('qtd_agua', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qtd_fermento', 'Quantidade de Fermento:') !!}
        {!! Form::number('qtd_fermento', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fermentos_id', 'Fermento:') !!}
        {!! Form::select(
            'fermentos_id',
            \App\Models\Fermento::orderBy('nome')->pluck('nome', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lupulos_id', 'Lupulo:') !!}
        {!! Form::select(
            'lupulos_id',
            \App\Models\Lupulo::orderBy('nome')->pluck('nome', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Criar Leva', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
