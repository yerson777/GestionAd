@extends('adminlte::page')

@section('template_title')
    {{ $registro->name ?? "{{ __('Show') Registro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numeros:</strong>
                            {{ $registro->numeros }}
                        </div>
                        <div class="form-group">
                            <strong>Control De Numeros:</strong>
                            {{ $registro->control_de_numeros }}
                        </div>
                        <div class="form-group">
                            <strong>Filas:</strong>
                            {{ $registro->filas }}
                        </div>
                        <div class="form-group">
                            <strong>Sabado:</strong>
                            {{ $registro->sabado }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $registro->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Token:</strong>
                            {{ $registro->token }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
