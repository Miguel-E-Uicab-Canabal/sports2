@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h2>OPCIONES DE TORNEOS</h2>
                <ul>
                    <li><a href="{{route('torneos.create')}}">Agregar torneo</a></li>
                    <li><a href="{{route('torneos.index')}}">Listado de torneos</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h2>OPCIONES DE PARTICIPANTES</h2>
                <ul>
                <li><a href="{{route('participantes.create')}}">Agregar participante</a></li>
                <li><a href="{{route('participantes.index')}}">Listado de participantes</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
    