@extends('adminlte::page')

@section('template_title')
    {{ $cheque->name ?? "{{ __('Show') Cheque" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cheque</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cheques.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Número:</strong>
                            {{ $cheque->número }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cheque->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cheque->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $cheque->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $cheque->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $cheque->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Token:</strong>
                            {{ $cheque->token }}
                        </div>
                        <div class="form-group">
                            <strong>Idiglesia:</strong>
                            {{ $cheque->idIglesia }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuenta:</strong>
                            {{ $cheque->idCuenta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
