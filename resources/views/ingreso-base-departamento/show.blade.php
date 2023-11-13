@extends('adminlte::page')

@section('template_title')
    {{ $ingresoBaseDepartamento->name ?? "{{ __('Show') Ingreso Base Departamento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ingreso Base Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingreso-base-departamentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $ingresoBaseDepartamento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingresoBaseDepartamento->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Idingresos:</strong>
                            {{ $ingresoBaseDepartamento->idIngresos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
