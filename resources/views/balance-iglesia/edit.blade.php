@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Balance Iglesia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Balance Iglesia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('balance-iglesias.update', $balanceIglesia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('balance-iglesia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
