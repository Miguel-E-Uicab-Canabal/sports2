@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2><b>Editar Participantes</b></h2>
        </div>
        <div class="col-md-3">
            <a href="{{route('inicio')}}" class="btn bg-success btn-block">
                <span>Inicio</span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('participantes.index')}}" class="btn bg-success btn-block">
                <span>Listado de Participantes</span>
            </a>
        </div>
    </div>
    {!! Form::model($participante, ['route' => ['participantes.update', $participante], 'method'=>'put']) !!}
        
        @include('participante.form')

    {!! Form::close() !!}
@endsection