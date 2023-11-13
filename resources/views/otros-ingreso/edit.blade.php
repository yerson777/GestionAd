@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Otros Ingreso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Otros Ingreso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('otros-ingresos.update', $otrosIngreso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('otros-ingreso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
