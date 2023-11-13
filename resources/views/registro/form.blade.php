<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numeros') }}
            {{ Form::text('numeros', $registro->numeros, ['class' => 'form-control' . ($errors->has('numeros') ? ' is-invalid' : ''), 'placeholder' => 'Numeros']) }}
            {!! $errors->first('numeros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('control_de_numeros') }}
            {{ Form::text('control_de_numeros', $registro->control_de_numeros, ['class' => 'form-control' . ($errors->has('control_de_numeros') ? ' is-invalid' : ''), 'placeholder' => 'Control De Numeros']) }}
            {!! $errors->first('control_de_numeros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('filas') }}
            {{ Form::text('filas', $registro->filas, ['class' => 'form-control' . ($errors->has('filas') ? ' is-invalid' : ''), 'placeholder' => 'Filas']) }}
            {!! $errors->first('filas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sabado') }}
            {{ Form::text('sabado', $registro->sabado, ['class' => 'form-control' . ($errors->has('sabado') ? ' is-invalid' : ''), 'placeholder' => 'Sabado']) }}
            {!! $errors->first('sabado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('balance') }}
            {{ Form::text('balance', $registro->balance, ['class' => 'form-control' . ($errors->has('balance') ? ' is-invalid' : ''), 'placeholder' => 'Balance']) }}
            {!! $errors->first('balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('token') }}
            {{ Form::text('token', $registro->token, ['class' => 'form-control' . ($errors->has('token') ? ' is-invalid' : ''), 'placeholder' => 'Token']) }}
            {!! $errors->first('token', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>