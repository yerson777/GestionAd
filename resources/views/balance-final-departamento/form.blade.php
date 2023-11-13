<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $balanceFinalDepartamento->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoGasto') }}
            {{ Form::text('idTipoGasto', $balanceFinalDepartamento->idTipoGasto, ['class' => 'form-control' . ($errors->has('idTipoGasto') ? ' is-invalid' : ''), 'placeholder' => 'Idtipogasto']) }}
            {!! $errors->first('idTipoGasto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoGasto') }}
            {{ Form::text('montoGasto', $balanceFinalDepartamento->montoGasto, ['class' => 'form-control' . ($errors->has('montoGasto') ? ' is-invalid' : ''), 'placeholder' => 'Montogasto']) }}
            {!! $errors->first('montoGasto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoIngreso') }}
            {{ Form::text('idTipoIngreso', $balanceFinalDepartamento->idTipoIngreso, ['class' => 'form-control' . ($errors->has('idTipoIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoingreso']) }}
            {!! $errors->first('idTipoIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('montoIngreso') }}
            {{ Form::text('montoIngreso', $balanceFinalDepartamento->montoIngreso, ['class' => 'form-control' . ($errors->has('montoIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Montoingreso']) }}
            {!! $errors->first('montoIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>