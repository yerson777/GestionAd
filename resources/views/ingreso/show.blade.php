@extends('adminlte::page')

@section('template_title')
    {{ $ingreso->name ?? "{{ __('Show') Ingreso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero De:</strong>
                            {{ $ingreso->numero_de }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $ingreso->url }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $ingreso->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $ingreso->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $ingreso->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Idregistro:</strong>
                            {{ $ingreso->idRegistro }}
                        </div>
                        <div class="form-group">
                            <strong>Idmiembro:</strong>
                            {{ $ingreso->idMiembro }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoingresofijo:</strong>
                            {{ $ingreso->idTipoIngresoFijo }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoingresotemporal:</strong>
                            {{ $ingreso->idTipoIngresoTemporal }}
                        </div>
                        <div class="form-group">
                            <strong>Token:</strong>
                            {{ $ingreso->token }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
