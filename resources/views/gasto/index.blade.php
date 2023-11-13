@extends('adminlte::page')

@section('template_title')
    Gasto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Gasto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('gastos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Numerofactura</th>
										<th>Fecha</th>
										<th>Fechafactura</th>
										<th>Monto</th>
										<th>Detalle</th>
										<th>Imagen</th>
										<th>Departamento Id</th>
										<th>Idcheque</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gastos as $gasto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $gasto->numeroFactura }}</td>
											<td>{{ $gasto->fecha }}</td>
											<td>{{ $gasto->fechaFactura }}</td>
											<td>{{ $gasto->monto }}</td>
											<td>{{ $gasto->detalle }}</td>
											<td>{{ $gasto->imagen }}</td>
											<td>{{ $gasto->departamento_id }}</td>
											<td>{{ $gasto->idCheque }}</td>

                                            <td>
                                                <form action="{{ route('gastos.destroy',$gasto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('gastos.show',$gasto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('gastos.edit',$gasto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $gastos->links() !!}
            </div>
        </div>
    </div>
@endsection
