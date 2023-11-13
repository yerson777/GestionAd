@extends('adminlte::page')

@section('title', __('Show Iglesia'))

@section('content_header')
    <h1>{{ __('Show Iglesia') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $iglesia->nombre }}</h3>
            <div class="card-tools">
                <a href="{{ route('iglesias.index') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-arrow-left"></i> {{ __('Back') }}
                </a>
            </div>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">{{ __('Nombre') }}</dt>
                <dd class="col-sm-9">{{ $iglesia->nombre }}</dd>

                <dt class="col-sm-3">{{ __('Direccion') }}</dt>
                <dd class="col-sm-9">{{ $iglesia->direccion }}</dd>

                <dt class="col-sm-3">{{ __('Telefono') }}</dt>
                <dd class="col-sm-9">{{ $iglesia->telefono }}</dd>
            </dl>
        </div>
    </div>
@stop
