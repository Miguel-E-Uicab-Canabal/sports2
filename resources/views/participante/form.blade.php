<div class="card">
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre', null) !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidop', 'Apellido paterno', null) !!}
            {!! Form::text('apellidop', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidom', 'Apellido materno', null) !!}
            {!! Form::text('apellidom', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('edad', 'Edad', null) !!}
            {!! Form::text('edad', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('torneo_id', 'Torneo', null) !!}
            {!! Form::select('torneo_id', $torneos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un torneo']) !!}
        </div>
        {!! Form::submit('Guardar', ['class' => 'btn bg-primary']) !!}
    </div>
</div>