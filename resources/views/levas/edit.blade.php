@extends('adminlte::page')

@section('content')
    <h3>Editando levas: {{ $levas->id }}</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => ['levas.update', 'id' => $levas->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('dt_fabricacao', 'Data de Fabricação:') !!}
        {!! Form::text('dt_fabricacao', $levas->dt_fabricacao, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fervura_inicial', 'Fervura Inicial:') !!}
        {!! Form::text('fervura_inicial', $levas->fervura_inicial, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tempo_fervura', 'Tempo de Fervura:') !!}
        {!! Form::text('tempo_fervura', $levas->tempo_fervura, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qtd_agua', 'Quantidade de Água:') !!}
        {!! Form::text('qtd_agua', $levas->qtd_agua, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('qtd_fermento', 'Quantidade de Fermento:') !!}
        {!! Form::text('qtd_fermento', $levas->qtd_fermento, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fermentos_id', 'Fermento:') !!}
        {!! Form::select(
            'fermentos_id',
            \App\Models\Fermento::orderBy('nome')->pluck('nome', 'id')->toArray(),
            $levas->fermentos_id,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lupulos_id', 'Lupulo:') !!}
        {!! Form::select(
            'lupulos_id',
            \App\Models\Lupulo::orderBy('nome')->pluck('nome', 'id')->toArray(),
            $levas->lupulos_id,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tempo_fervura_final', 'Tempo de Fervura Final:') !!}
        {!! Form::text('tempo_fervura_final', $levas->tempo_fervura_final, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
