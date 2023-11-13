@extends('adminlte::page')

@section('template_title')
    {{ $banco->name ?? "{{ __('Show') Banco" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Banco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bancos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $banco->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $banco->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $banco->url }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $banco->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Registro Id:</strong>
                            {{ $banco->registro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cheque Cuenta Id:</strong>
                            {{ $banco->cheque_cuenta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
