<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('balance') }}
            {{ Form::text('balance', $chequeCuenta->balance, ['class' => 'form-control' . ($errors->has('balance') ? ' is-invalid' : ''), 'placeholder' => 'Balance']) }}
            {!! $errors->first('balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCuenta') }}
            {{ Form::text('idCuenta', $chequeCuenta->idCuenta, ['class' => 'form-control' . ($errors->has('idCuenta') ? ' is-invalid' : ''), 'placeholder' => 'Idcuenta']) }}
            {!! $errors->first('idCuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idCheque') }}
            {{ Form::text('idCheque', $chequeCuenta->idCheque, ['class' => 'form-control' . ($errors->has('idCheque') ? ' is-invalid' : ''), 'placeholder' => 'Idcheque']) }}
            {!! $errors->first('idCheque', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>