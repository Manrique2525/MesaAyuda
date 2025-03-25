@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Crear Usuario</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                <li class="breadcrumb-item active">Crear Usuario</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de Creación</h5>

                        <!-- Formulario de Creación de Usuario -->
                        <form action="{{ route('usuarios.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="rol" class="form-label">Rol</label>
                                    <select class="form-control" id="rol" name="rol" required>
                                        <option value="administrador">Administrador</option>
                                        <option value="usuario">Usuario</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Crear Usuario</button>
                                    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </form><!-- End Formulario de Creación de Usuario -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
