@extends('adminlte::page')

@section('template_title')
    {{ $balanceIglesia->name ?? "{{ __('Show') Balance Iglesia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Balance Iglesia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('balance-iglesias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $balanceIglesia->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $balanceIglesia->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Iglesia Id:</strong>
                            {{ $balanceIglesia->iglesia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Periodos Id:</strong>
                            {{ $balanceIglesia->periodos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
