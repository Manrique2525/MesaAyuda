@extends('layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Usuarios</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item">Tabla</li>
                    <li class="breadcrumb-item active">Usuarios</li>
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
                            <h5 class="card-title">Usuarios Registrados</h5>
                            <!-- Button to create a new user -->
                            <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm left">Crear Usuario</a>

                            <!-- Table with users -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->rol }}</td>
                                            <td>
                                                <a href="{{ route('usuarios.show', $usuario) }}" class="btn btn-primary btn-sm">Ver</a>
                                                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning btn-sm">Editar</a>
                                                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete(event)">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with users -->
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
            title: "¿Estás seguro de eliminar este usuario?",
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
                    text: "El usuario ha sido eliminado.",
                    icon: "success"
                });
            }
        });
    }
</script>
