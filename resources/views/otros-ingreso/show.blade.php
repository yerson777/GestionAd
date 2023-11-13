@extends('adminlte::page')

@section('template_title')
    {{ $otrosIngreso->name ?? "{{ __('Show') Otros Ingreso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Otros Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('otros-ingresos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $otrosIngreso->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Comprobante:</strong>
                            {{ $otrosIngreso->comprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $otrosIngreso->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoingreso:</strong>
                            {{ $otrosIngreso->idTipoIngreso }}
                        </div>
                        <div class="form-group">
                            <strong>Cuenta Id:</strong>
                            {{ $otrosIngreso->cuenta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
