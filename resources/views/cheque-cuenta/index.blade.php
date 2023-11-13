@extends('layouts.app')

@section('template_title')
    Cheque Cuenta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cheque Cuenta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cheque-cuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Balance</th>
										<th>Idcuenta</th>
										<th>Idcheque</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chequeCuentas as $chequeCuenta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $chequeCuenta->balance }}</td>
											<td>{{ $chequeCuenta->idCuenta }}</td>
											<td>{{ $chequeCuenta->idCheque }}</td>

                                            <td>
                                                <form action="{{ route('cheque-cuentas.destroy',$chequeCuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cheque-cuentas.show',$chequeCuenta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cheque-cuentas.edit',$chequeCuenta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $chequeCuentas->links() !!}
            </div>
        </div>
    </div>
@endsection
