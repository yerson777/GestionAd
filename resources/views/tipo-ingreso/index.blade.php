@extends('adminlte::page')

@section('template_title')
    Tipo Ingreso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Ingreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-ingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Balance</th>
										<th>Iglesia Id</th>
										<th>Departamento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoIngresos as $tipoIngreso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoIngreso->nombre }}</td>
											<td>{{ $tipoIngreso->balance }}</td>
											<td>{{ $tipoIngreso->iglesia_id }}</td>
											<td>{{ $tipoIngreso->departamento_id }}</td>

                                            <td>
                                                <form action="{{ route('tipo-ingresos.destroy',$tipoIngreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-ingresos.show',$tipoIngreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-ingresos.edit',$tipoIngreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipoIngresos->links() !!}
            </div>
        </div>
    </div>
@endsection
