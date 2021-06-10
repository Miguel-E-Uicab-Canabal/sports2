@extends('layout')

@section('content')
<div class="row">
    <div class="card col-md-6">
        <div class="row">
            <div class="col-md-6">
                <h4>Datos del torneo</h4>
            </div>
            <div class="col-md-3">
                <a class="btn bg-primary" href="{{route('inicio')}}">Inicio</a>
            </div>
            <div class="col-md-3">
                <a class="btn bg-primary" href="{{route('torneos.index')}}">Lista de participantes</a>
            </div>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('nombre', 'Nombre', null) !!}</strong>
            <strong class="form-control">{{$torneo->nombre}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('deporte', 'Deporte', null) !!}</strong>
            <strong class="form-control">{{$torneo->deporte}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('fecha', 'Fecha', null) !!}</strong>
            <strong class="form-control">{{$torneo->fecha}}</strong>
        </div>
        <div class="form-group">
            <strong>{!! Form::label('hora', 'Hora', null) !!}</strong>
            <strong class="form-control">{{$torneo->hora}}</strong>
        </div>
    </div>
    <div class="card col-md-6">
        <div>
            <strong>{!! Form::label('participantes', 'Participantes:', null) !!}</strong>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Edad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($torneo->participantes as $participante)
                        <tr>
                            <td>{{$participante->nombre}}</td>
                            <td>{{$participante->apellidop}}</td>
                            <td>{{$participante->apellidom}}</td>
                            <td>{{$participante->edad}}</td>
                            <td>
                                <a class="btn bg-primary" href="{{route('participantes.show', $participante)}}">
                                    Ver 
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection()
