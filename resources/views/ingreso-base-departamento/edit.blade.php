@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Ingreso Base Departamento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Ingreso Base Departamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ingreso-base-departamentos.update', $ingresoBaseDepartamento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ingreso-base-departamento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
