@extends('adminlte::page')

@section('template_title')
    Cheque
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cheque') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cheques.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Número</th>
										<th>Nombre</th>
										<th>Fecha</th>
										<th>Detalle</th>
										<th>Balance</th>
										<th>Tipo</th>
										<th>Token</th>
										<th>Idiglesia</th>
										<th>Idcuenta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cheques as $cheque)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cheque->número }}</td>
											<td>{{ $cheque->nombre }}</td>
											<td>{{ $cheque->fecha }}</td>
											<td>{{ $cheque->detalle }}</td>
											<td>{{ $cheque->balance }}</td>
											<td>{{ $cheque->tipo }}</td>
											<td>{{ $cheque->token }}</td>
											<td>{{ $cheque->idIglesia }}</td>
											<td>{{ $cheque->idCuenta }}</td>

                                            <td>
                                                <form action="{{ route('cheques.destroy',$cheque->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cheques.show',$cheque->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cheques.edit',$cheque->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cheques->links() !!}
            </div>
        </div>
    </div>
@endsection
