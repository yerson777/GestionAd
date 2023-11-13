@extends('adminlte::page')

@section('template_title')
    {{ $tipoGasto->name ?? "{{ __('Show') Tipo Gasto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Gasto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-gastos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoGasto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $tipoGasto->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $tipoGasto->departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Iglesia Id:</strong>
                            {{ $tipoGasto->iglesia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
