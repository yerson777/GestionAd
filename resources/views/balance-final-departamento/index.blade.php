@extends('adminlte::page')

@section('template_title')
    Balance Final Departamento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Balance Final Departamento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('balance-final-departamentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Idtipogasto</th>
										<th>Montogasto</th>
										<th>Idtipoingreso</th>
										<th>Montoingreso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($balanceFinalDepartamentos as $balanceFinalDepartamento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $balanceFinalDepartamento->fecha }}</td>
											<td>{{ $balanceFinalDepartamento->idTipoGasto }}</td>
											<td>{{ $balanceFinalDepartamento->montoGasto }}</td>
											<td>{{ $balanceFinalDepartamento->idTipoIngreso }}</td>
											<td>{{ $balanceFinalDepartamento->montoIngreso }}</td>

                                            <td>
                                                <form action="{{ route('balance-final-departamentos.destroy',$balanceFinalDepartamento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('balance-final-departamentos.show',$balanceFinalDepartamento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('balance-final-departamentos.edit',$balanceFinalDepartamento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $balanceFinalDepartamentos->links() !!}
            </div>
        </div>
    </div>
@endsection
