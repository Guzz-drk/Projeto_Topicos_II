@extends('adminlte::page')

@section('content')
    <h3>Editando MalteLevas: {{ $malteLevas->id }}</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['route' => ['malteLevas.update', 'id' => $malteLevas->id], 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('qtd', 'Quantidade de Malte:') !!}
        {!! Form::text('qtd', $malteLevas->qtd, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_malte', 'Malte:') !!}
        {!! Form::select(
            'id_malte',
            \App\Models\Malte::orderBy('nome')->pluck('nome', 'id')->toArray(),
            $malteLevas->id_malte,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_leva', 'Leva:') !!}
        {!! Form::select(
            'id_leva',
            \App\Models\Leva::orderBy('id')->pluck('id', 'id')->toArray(),
            $malteLevas->id_leva,
            ['class' => 'form-control', 'required'],
        ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop
