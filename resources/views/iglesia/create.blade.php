@extends('adminlte::page')

@section('template_title')
 
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Iglesia</span>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('iglesias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            
                            @include('iglesia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


