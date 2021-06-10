
<div class="card">
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre', null) !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('deporte', 'Deporte', null) !!}
            {!! Form::text('deporte', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('fecha', 'Fecha', null) !!}
            {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('hora', 'Hora', null) !!}
            {!! Form::time('hora', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Guardar', ['class' => 'btn bg-primary']) !!}
    </div>
</div>
