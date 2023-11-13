@extends('adminlte::page')

@section('template_title')
    {{ $periodo->name ?? "{{ __('Show') Periodo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Periodo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $periodo->mes }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $periodo->año }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $periodo->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $periodo->fechaFin }}
                        </div>
                        <div class="form-group">
                            <strong>Token:</strong>
                            {{ $periodo->token }}
                        </div>
                        <div class="form-group">
                            <strong>Iglesia Id:</strong>
                            {{ $periodo->iglesia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
