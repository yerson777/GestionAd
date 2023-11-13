@extends('adminlte::page')

@section('template_title')
    Miembro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Miembro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('miembros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Fecha Nacimiento</th>
										<th>Genero</th>
										<th>Celular</th>
										<th>Email</th>
										<th>Iglesia Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($miembros as $miembro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $miembro->nombre }}</td>
											<td>{{ $miembro->apellido_paterno }}</td>
											<td>{{ $miembro->apellido_materno }}</td>
											<td>{{ $miembro->fecha_nacimiento }}</td>
											<td>{{ $miembro->genero }}</td>
											<td>{{ $miembro->celular }}</td>
											<td>{{ $miembro->email }}</td>
											<td>{{ $miembro->iglesia_id }}</td>

                                            <td>
                                                <form action="{{ route('miembros.destroy',$miembro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('miembros.show',$miembro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('miembros.edit',$miembro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $miembros->links() !!}
            </div>
        </div>
    </div>
@endsection
