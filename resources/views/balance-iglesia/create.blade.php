@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Balance Iglesia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Balance Iglesia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('balance-iglesias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('balance-iglesia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
