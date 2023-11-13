@extends('adminlte::page')

@section('template_title')
    {{ __('Create') }} Cheque
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Cheque</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cheques.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('cheque.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
