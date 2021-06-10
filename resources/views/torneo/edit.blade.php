@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2><b>Editar torneos</b></h2>
        </div>
        <div class="col-md-3">
            <a href="{{route('inicio')}}" class="btn bg-success btn-block">
                <span>Inicio</span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('torneos.index')}}" class="btn bg-success btn-block">
                <span>Listado de Torneo</span>
            </a>
        </div>
    </div>

    {!! Form::model($torneo, ['route' => ['torneos.update', $torneo], 'method'=>'put']) !!}
        
        @include('torneo.form')

    {!! Form::close() !!}
@endsection