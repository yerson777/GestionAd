@extends('layouts.app')

@section('template_title')
    {{ $chequeCuenta->name ?? "{{ __('Show') Cheque Cuenta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cheque Cuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cheque-cuentas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $chequeCuenta->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Idcuenta:</strong>
                            {{ $chequeCuenta->idCuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Idcheque:</strong>
                            {{ $chequeCuenta->idCheque }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
