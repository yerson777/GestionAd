<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $otrosIngreso->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comprobante') }}
            {{ Form::text('comprobante', $otrosIngreso->comprobante, ['class' => 'form-control' . ($errors->has('comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Comprobante']) }}
            {!! $errors->first('comprobante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $otrosIngreso->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoIngreso') }}
            {{ Form::text('idTipoIngreso', $otrosIngreso->idTipoIngreso, ['class' => 'form-control' . ($errors->has('idTipoIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoingreso']) }}
            {!! $errors->first('idTipoIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuenta_id') }}
            {{ Form::text('cuenta_id', $otrosIngreso->cuenta_id, ['class' => 'form-control' . ($errors->has('cuenta_id') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta Id']) }}
            {!! $errors->first('cuenta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>