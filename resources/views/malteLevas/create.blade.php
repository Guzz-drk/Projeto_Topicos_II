@extends('adminlte::page')
@section('content')
    <h3>Novo Malte Levas</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => 'malteLevas.store']) !!}
    <div class="form-group">
        {!! Form::label('qtd', 'Quantidade do Malte') !!}
        {!! Form::text('qtd', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_malte', 'Malte:') !!}
        {!! Form::select(
            'id_malte',
            \App\Models\Malte::orderBy('nome')->pluck('nome', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_leva', 'Leva:') !!}
        {!! Form::select(
            'id_leva',
            \App\Models\Leva::orderBy('id')->pluck('id', 'id')->toArray(),
            null,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Criar Malte-Levas', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
