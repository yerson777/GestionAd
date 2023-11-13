<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $departamento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_presupuesto') }}
            {{ Form::text('tipo_presupuesto', $departamento->tipo_presupuesto, ['class' => 'form-control' . ($errors->has('tipo_presupuesto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Presupuesto']) }}
            {!! $errors->first('tipo_presupuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presupuesto') }}
            {{ Form::text('presupuesto', $departamento->presupuesto, ['class' => 'form-control' . ($errors->has('presupuesto') ? ' is-invalid' : ''), 'placeholder' => 'Presupuesto']) }}
            {!! $errors->first('presupuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('balance') }}
            {{ Form::text('balance', $departamento->balance, ['class' => 'form-control' . ($errors->has('balance') ? ' is-invalid' : ''), 'placeholder' => 'Balance']) }}
            {!! $errors->first('balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $departamento->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iglesia_id') }}
            {{ Form::text('iglesia_id', $departamento->iglesia_id, ['class' => 'form-control' . ($errors->has('iglesia_id') ? ' is-invalid' : ''), 'placeholder' => 'Iglesia Id']) }}
            {!! $errors->first('iglesia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>