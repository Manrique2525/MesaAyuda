<!-- resources/views/supervisores/index.blade.php -->
@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Supervisores</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Tabla</li>
                    <li class="breadcrumb-item active">Supervisores</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <!-- Table with stripped rows -->
                            <a href="{{ route('supervisores.create') }}" class="btn btn-primary btn-sm left">Crear</a>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Puesto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supervisores as $supervisor)
                                        <tr>
                                            <td>{{ $supervisor->nombre }}</td>
                                            <td>{{ $supervisor->apellido_pat }}</td>
                                            <td>{{ $supervisor->apellido_mat }}</td>
                                            <td>{{ $supervisor->puesto }}</td>
                                            <td>
                                                <a href="{{ route('supervisores.show', $supervisor) }}"
                                                    class="btn btn-primary btn-sm">Ver</a>
                                                <a href="{{ route('supervisores.edit', $supervisor) }}"
                                                    class="btn btn-danger btn-sm">Editar</a>
                                                <form action="{{ route('supervisores.delete', $supervisor) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete(event)">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection


<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevenir el comportamiento por defecto del botón
        const form = event.target.closest('form'); // Obtiene el formulario más cercano

        Swal.fire({
            title: "¿Estás seguro de eliminar este supervisor?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminarlo!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Envía el formulario si se confirma la eliminación
                Swal.fire({
                    title: "¡Eliminado!",
                    text: "El supervisor ha sido eliminado.",
                    icon: "success"
                });
            }
        });
    }
</script>
