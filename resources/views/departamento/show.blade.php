@extends('adminlte::page')

@section('template_title')
    {{ $departamento->name ?? "{{ __('Show') Departamento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departamentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $departamento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Presupuesto:</strong>
                            {{ $departamento->tipo_presupuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Presupuesto:</strong>
                            {{ $departamento->presupuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $departamento->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $departamento->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Iglesia Id:</strong>
                            {{ $departamento->iglesia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
