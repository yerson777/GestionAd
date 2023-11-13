@extends('adminlte::page')

@section('title', 'Iglesias')

@section('content_header')
    <h1>{{ __('Iglesia') }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span id="card_title">
                    {{ __('Iglesia') }}
                </span>
                <div class="float-right">
                    <!-- Button to trigger the modal for creating a new Iglesia -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createIglesiaModal">
                        {{ __('Create New') }}
                    </button>
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
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($iglesias as $iglesia)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $iglesia->nombre }}</td>
                                <td>{{ $iglesia->direccion }}</td>
                                <td>{{ $iglesia->telefono }}</td>
                                <td>
                                    <form action="{{ route('iglesias.destroy', $iglesia->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary" href="{{ route('iglesias.show', $iglesia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                        <!-- Button to trigger the modal for editing an Iglesia -->
                                        <a class="btn btn-sm btn-success btn-edit" href="#" data-toggle="modal" data-target="#editIglesiaModal" data-id="{{ $iglesia->id }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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

    <!-- Modal for creating a new Iglesia -->
    <div class="modal fade" id="createIglesiaModal" tabindex="-1" role="dialog" aria-labelledby="createIglesiaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createIglesiaModalLabel">{{ __('Create New Iglesia') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include the form for creating a new Iglesia -->
                    <form method="POST" action="{{ route('iglesias.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @include('iglesia.form')
                        <!-- Add any additional form fields as needed -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for editing an Iglesia -->
    <div class="modal fade" id="editIglesiaModal" tabindex="-1" role="dialog" aria-labelledby="editIglesiaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editIglesiaModalLabel">{{ __('Edit Iglesia') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include the form for editing an Iglesia -->
                    <form method="POST" id="editIglesiaForm" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Agregar campos ocultos para almacenar los datos de la iglesia -->
                        <input type="hidden" name="iglesia_id" id="iglesia_id">
                        @include('iglesia.form') <!-- Asegúrate de tener un formulario de edición similar al de creación -->
                        <!-- Add any additional form fields as needed -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    {!! $iglesias->links() !!}
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            // Capturar el evento del botón "Edit"
            $('.btn-edit').click(function () {
                // Obtener el ID de la Iglesia desde el atributo data-id
                var iglesiaId = $(this).data('id');
                
                // Hacer una solicitud AJAX para obtener los detalles de la Iglesia
                $.ajax({
                    url: '/iglesias/' + iglesiaId + '/edit',
                    method: 'GET',
                    success: function (data) {
                        // Rellenar los campos del formulario de edición con los datos obtenidos
                        $('#editIglesiaForm').attr('action', '/iglesias/' + iglesiaId);
                        $('#editIglesiaForm #iglesia_id').val(data.id);
                        $('#editIglesiaForm input[name="nombre"]').val(data.nombre);
                        $('#editIglesiaForm input[name="direccion"]').val(data.direccion);
                        $('#editIglesiaForm input[name="telefono"]').val(data.telefono);

                        // Mostrar el modal de edición
                        $('#editIglesiaModal').modal('show');
                    }
                });
            });
        });
    </script>
@endsection
