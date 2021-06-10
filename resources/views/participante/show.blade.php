@extends('layout')

@section('content')
    <div class="card col-md-6">
        <a href=""></a>
    </div>
    <div class="card col-md-6">
    </div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <h4>Datos del participante</h4>
            </div>
            <div class="col-md-3">
                <a class="btn bg-primary" href="{{route('inicio')}}">Inicio</a>
            </div>
            <div class="col-md-3">
                <a class="btn bg-primary" href="{{route('participantes.index')}}">Lista de participantes</a>
            </div>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('nombre', 'Nombre', null) !!}</strong>
            <strong class="form-control">{{$participante->nombre}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('apellidop', 'Apellido paterno', null) !!}</strong>
            <strong class="form-control">{{$participante->apellidop}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('apellidom', 'Apellido materno', null) !!}</strong>
            <strong class="form-control">{{$participante->apellidom}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('edad', 'Edad', null) !!}</strong>
            <strong class="form-control">{{$participante->edad}}</strong>
        </div>
    </div>
    <div class="card col-md-6">
        <div class="row">
            <div class="col-md-6">
                <h4>Datos del torneo a participar</h4>
            </div>
            <div class="col-md-6">
                <a class="btn bg-primary" href="{{route('torneos.show', $participante->torneo)}}">Ver torneo</a>
            </div>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('torneo_id', 'Torneo', null) !!}</strong>
            <strong class="form-control">{{$participante->torneo->nombre}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('torneo_id', 'Torneo', null) !!}</strong>
            <strong class="form-control">{{$participante->torneo->deporte}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('torneo_id', 'Torneo', null) !!}</strong>
            <strong class="form-control">{{$participante->torneo->fecha}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('torneo_id', 'Torneo', null) !!}</strong>
            <strong class="form-control">{{$participante->torneo->hora}}</strong>
        </div>
    </div>
</div>
@endsection