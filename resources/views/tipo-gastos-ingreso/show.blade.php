@extends('adminlte::page')

@section('template_title')
    {{ $tipoGastosIngreso->name ?? "{{ __('Show') Tipo Gastos Ingreso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Gastos Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-gastos-ingresos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idtipogasto:</strong>
                            {{ $tipoGastosIngreso->idTipoGasto }}
                        </div>
                        <div class="form-group">
                            <strong>Idtipoingreso:</strong>
                            {{ $tipoGastosIngreso->idTipoIngreso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
