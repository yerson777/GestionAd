@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Ingreso Base Departamento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Ingreso Base Departamento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ingreso-base-departamentos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ingreso-base-departamento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
