<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_de') }}
            {{ Form::text('numero_de', $ingreso->numero_de, ['class' => 'form-control' . ($errors->has('numero_de') ? ' is-invalid' : ''), 'placeholder' => 'Numero De']) }}
            {!! $errors->first('numero_de', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $ingreso->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $ingreso->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $ingreso->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('balance') }}
            {{ Form::text('balance', $ingreso->balance, ['class' => 'form-control' . ($errors->has('balance') ? ' is-invalid' : ''), 'placeholder' => 'Balance']) }}
            {!! $errors->first('balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idRegistro') }}
            {{ Form::text('idRegistro', $ingreso->idRegistro, ['class' => 'form-control' . ($errors->has('idRegistro') ? ' is-invalid' : ''), 'placeholder' => 'Idregistro']) }}
            {!! $errors->first('idRegistro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idMiembro') }}
            {{ Form::text('idMiembro', $ingreso->idMiembro, ['class' => 'form-control' . ($errors->has('idMiembro') ? ' is-invalid' : ''), 'placeholder' => 'Idmiembro']) }}
            {!! $errors->first('idMiembro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoIngresoFijo') }}
            {{ Form::text('idTipoIngresoFijo', $ingreso->idTipoIngresoFijo, ['class' => 'form-control' . ($errors->has('idTipoIngresoFijo') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoingresofijo']) }}
            {!! $errors->first('idTipoIngresoFijo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTipoIngresoTemporal') }}
            {{ Form::text('idTipoIngresoTemporal', $ingreso->idTipoIngresoTemporal, ['class' => 'form-control' . ($errors->has('idTipoIngresoTemporal') ? ' is-invalid' : ''), 'placeholder' => 'Idtipoingresotemporal']) }}
            {!! $errors->first('idTipoIngresoTemporal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('token') }}
            {{ Form::text('token', $ingreso->token, ['class' => 'form-control' . ($errors->has('token') ? ' is-invalid' : ''), 'placeholder' => 'Token']) }}
            {!! $errors->first('token', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>