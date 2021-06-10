@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2><b>Listado de torneos</b></h2>
        </div>
        <div class="col-md-3">
            <a href="{{route('inicio')}}" class="btn bg-success btn-block">
                <span>Inicio</span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('torneos.create')}}" class="btn bg-success btn-block">
                <span>Agregar Torneo</span>
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Deporte</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($torneos as $torneo)
                <tr>
                    <td>
                        {{$torneo->nombre}}
                    </td>
                    <td>
                        {{$torneo->deporte}}
                    </td>
                    <td>
                        {{$torneo->fecha}}
                    </td>
                    <td>
                        {{$torneo->hora}}
                    </td>
                    <td>
                        <form action="{{route('torneos.destroy', $torneo)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a class="btn bg-primary" href="{{route('torneos.show', $torneo)}}">Ver</a>
                            <a class="btn bg-secondary" href="{{route('torneos.edit', $torneo)}}">Editar</a>
                            <button type="submit" class="btn bg-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection 