@extends('adminlte::page')

@section('template_title')
    {{ $balanceFinalDepartamento->name ?? "{{ __('Show') Balance Final Departamento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Balance Final Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('balance-final-departamentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $balanceFinalDepartamento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipogasto:</strong>
                            {{ $balanceFinalDepartamento->idTipoGasto }}
                        </div>
                        <div class="form-group">
                            <strong>Montogasto:</strong>
                            {{ $balanceFinalDepartamento->montoGasto }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoingreso:</strong>
                            {{ $balanceFinalDepartamento->idTipoIngreso }}
                        </div>
                        <div class="form-group">
                            <strong>Montoingreso:</strong>
                            {{ $balanceFinalDepartamento->montoIngreso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
