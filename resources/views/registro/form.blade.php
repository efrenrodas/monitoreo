<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('velocidad') }}
            {{ Form::text('velocidad', $registro->velocidad, ['class' => 'form-control' . ($errors->has('velocidad') ? ' is-invalid' : ''), 'placeholder' => 'Velocidad']) }}
            {!! $errors->first('velocidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('corriente') }}
            {{ Form::text('corriente', $registro->corriente, ['class' => 'form-control' . ($errors->has('corriente') ? ' is-invalid' : ''), 'placeholder' => 'Corriente']) }}
            {!! $errors->first('corriente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Torque') }}
            {{ Form::text('Torque', $registro->Torque, ['class' => 'form-control' . ($errors->has('Torque') ? ' is-invalid' : ''), 'placeholder' => 'Torque']) }}
            {!! $errors->first('Torque', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Potencia') }}
            {{ Form::text('Potencia', $registro->Potencia, ['class' => 'form-control' . ($errors->has('Potencia') ? ' is-invalid' : ''), 'placeholder' => 'Potencia']) }}
            {!! $errors->first('Potencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sentido') }}
            {{ Form::text('sentido', $registro->sentido, ['class' => 'form-control' . ($errors->has('sentido') ? ' is-invalid' : ''), 'placeholder' => 'Sentido']) }}
            {!! $errors->first('sentido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regulador1') }}
            {{ Form::text('regulador1', $registro->regulador1, ['class' => 'form-control' . ($errors->has('regulador1') ? ' is-invalid' : ''), 'placeholder' => 'Regulador1']) }}
            {!! $errors->first('regulador1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoMotor') }}
            {{ Form::text('estadoMotor', $registro->estadoMotor, ['class' => 'form-control' . ($errors->has('estadoMotor') ? ' is-invalid' : ''), 'placeholder' => 'Estadomotor']) }}
            {!! $errors->first('estadoMotor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>