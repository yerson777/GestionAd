@extends('adminlte::page')

@section('template_title')
    {{ $gasto->name ?? "{{ __('Show') Gasto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Gasto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('gastos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numerofactura:</strong>
                            {{ $gasto->numeroFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $gasto->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafactura:</strong>
                            {{ $gasto->fechaFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $gasto->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $gasto->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $gasto->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $gasto->departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Idcheque:</strong>
                            {{ $gasto->idCheque }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
