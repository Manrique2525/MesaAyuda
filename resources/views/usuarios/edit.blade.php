@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Editar Usuario</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                <li class="breadcrumb-item active">Editar Usuario</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de Edición</h5>

                        <!-- Formulario de Edición de Usuario -->
                        <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
                            @csrf
                            @method('PUT')
                        
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $usuario->name) }}" required>
                                </div>
                        
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $usuario->email) }}" required>
                                </div>
                        
                                <div class="col-md-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small class="form-text text-muted">Deja el campo vacío si no deseas cambiar la contraseña.</small>
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="rol" class="form-label">Rol</label>
                                    <select class="form-control" id="rol" name="rol" required>
                                        <option value="administrador" {{ $usuario->rol == 'administrador' ? 'selected' : '' }}>Administrador</option>
                                        <option value="usuario" {{ $usuario->rol == 'usuario' ? 'selected' : '' }}>Usuario</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                                    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </form><!-- End Formulario de Edición de Usuario -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
