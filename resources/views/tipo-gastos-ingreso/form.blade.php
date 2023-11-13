<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idTipoGasto') }}
            {{ Form::text('idTipoGasto', $tipoGastosIngreso->idTipoGasto, ['class' => 'form-control' . ($errors->has('idTipoGasto') ? ' is-invalid' : ''), 'placeholder' => 'Idtipogasto']) }}
            {!! $errors->first('idTipoGasto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoIngreso') }}
            {{ Form::text('idTipoIngreso', $tipoGastosIngreso->idTipoIngreso, ['class' => 'form-control' . ($errors->has('idTipoIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoingreso']) }}
            {!! $errors->first('idTipoIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>