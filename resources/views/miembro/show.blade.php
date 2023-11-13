@extends('adminlte::page')

@section('template_title')
    {{ $miembro->name ?? "{{ __('Show') Miembro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Miembro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('miembros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $miembro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $miembro->apellido_paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $miembro->apellido_materno }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $miembro->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $miembro->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $miembro->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $miembro->email }}
                        </div>
                        <div class="form-group">
                            <strong>Iglesia Id:</strong>
                            {{ $miembro->iglesia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
