@extends('adminlte::page')
@section('content')
    <h3>Novo Estilo Levas</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'estiloLevas.store']) !!}
    <div class="form-group">
        {!! Form::label('tipo_leva', 'Tipo Leva:') !!}
        {!! Form::text('tipo_leva', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('leva_id', 'Leva:') !!}
        {!! Form::select(
            'leva_id',
            \App\Models\Leva::orderBy('id')->pluck('id', 'id')->toArray(),
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
