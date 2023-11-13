@extends('adminlte::page')

@section('template_title')
    Tipo Gasto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Gasto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-gastos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Departamento Id</th>
										<th>Iglesia Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoGastos as $tipoGasto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoGasto->nombre }}</td>
											<td>{{ $tipoGasto->balance }}</td>
											<td>{{ $tipoGasto->departamento_id }}</td>
											<td>{{ $tipoGasto->iglesia_id }}</td>

                                            <td>
                                                <form action="{{ route('tipo-gastos.destroy',$tipoGasto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-gastos.show',$tipoGasto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-gastos.edit',$tipoGasto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tipoGastos->links() !!}
            </div>
        </div>
    </div>
@endsection
