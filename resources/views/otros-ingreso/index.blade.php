@extends('adminlte::page')

@section('template_title')
    Otros Ingreso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Otros Ingreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('otros-ingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Comprobante</th>
										<th>Monto</th>
										<th>Idtipoingreso</th>
										<th>Cuenta Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($otrosIngresos as $otrosIngreso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $otrosIngreso->fecha }}</td>
											<td>{{ $otrosIngreso->comprobante }}</td>
											<td>{{ $otrosIngreso->monto }}</td>
											<td>{{ $otrosIngreso->idTipoIngreso }}</td>
											<td>{{ $otrosIngreso->cuenta_id }}</td>

                                            <td>
                                                <form action="{{ route('otros-ingresos.destroy',$otrosIngreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('otros-ingresos.show',$otrosIngreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('otros-ingresos.edit',$otrosIngreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $otrosIngresos->links() !!}
            </div>
        </div>
    </div>
@endsection
