@extends('adminlte::page')

@section('template_title')
    Ingreso Base Departamento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingreso Base Departamento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingreso-base-departamentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Fecha</th>
										<th>Monto</th>
										<th>Idingresos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingresoBaseDepartamentos as $ingresoBaseDepartamento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ingresoBaseDepartamento->fecha }}</td>
											<td>{{ $ingresoBaseDepartamento->monto }}</td>
											<td>{{ $ingresoBaseDepartamento->idIngresos }}</td>

                                            <td>
                                                <form action="{{ route('ingreso-base-departamentos.destroy',$ingresoBaseDepartamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingreso-base-departamentos.show',$ingresoBaseDepartamento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingreso-base-departamentos.edit',$ingresoBaseDepartamento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ingresoBaseDepartamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
