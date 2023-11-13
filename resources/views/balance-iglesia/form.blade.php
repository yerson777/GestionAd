<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $balanceIglesia->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $balanceIglesia->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iglesia_id') }}
            {{ Form::text('iglesia_id', $balanceIglesia->iglesia_id, ['class' => 'form-control' . ($errors->has('iglesia_id') ? ' is-invalid' : ''), 'placeholder' => 'Iglesia Id']) }}
            {!! $errors->first('iglesia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('periodos_id') }}
            {{ Form::text('periodos_id', $balanceIglesia->periodos_id, ['class' => 'form-control' . ($errors->has('periodos_id') ? ' is-invalid' : ''), 'placeholder' => 'Periodos Id']) }}
            {!! $errors->first('periodos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>