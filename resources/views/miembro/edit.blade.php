@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Miembro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Miembro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('miembros.update', $miembro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('miembro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection