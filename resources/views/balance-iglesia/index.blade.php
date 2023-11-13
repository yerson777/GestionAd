@extends('adminlte::page')

@section('template_title')
    Balance Iglesia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Balance Iglesia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('balance-iglesias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Iglesia Id</th>
										<th>Periodos Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($balanceIglesias as $balanceIglesia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $balanceIglesia->fecha }}</td>
											<td>{{ $balanceIglesia->monto }}</td>
											<td>{{ $balanceIglesia->iglesia_id }}</td>
											<td>{{ $balanceIglesia->periodos_id }}</td>

                                            <td>
                                                <form action="{{ route('balance-iglesias.destroy',$balanceIglesia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('balance-iglesias.show',$balanceIglesia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('balance-iglesias.edit',$balanceIglesia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $balanceIglesias->links() !!}
            </div>
        </div>
    </div>
@endsection
