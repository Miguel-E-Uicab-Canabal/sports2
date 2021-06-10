@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2><b>Listado de participantes</b></h2>
        </div>
        <div class="col-md-3">
            <a href="{{route('inicio')}}" class="btn bg-success btn-block">
                <span>Inicio</span>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route('participantes.create')}}" class="btn bg-success btn-block">
                <span>Agregar Participante</span>
            </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Torneo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participantes as $participante)
                <tr>
                    <td>
                        {{$participante->nombre}}
                    </td>
                    <td>
                        {{$participante->apellidop}}
                    </td>
                    <td>
                        {{$participante->apellidom}}
                    </td>
                    <td>
                        {{$participante->edad}}
                    </td>
                    <td>
                        {{$participante->torneo->nombre}}
                    </td>
                    <td>
                        
                        <form action="{{route('participantes.destroy', $participante)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a class="btn bg-primary" href="{{route('participantes.show', $participante->id)}}">Ver</a>
                            <a class="btn bg-secondary" href="{{route('participantes.edit', $participante)}}">Editar</a>
                            <button type="submit" class="btn bg-danger">Elminar</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection