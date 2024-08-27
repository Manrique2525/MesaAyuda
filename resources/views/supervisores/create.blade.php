@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Crear Supervisor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supervisores.index') }}">Supervisores</a></li>
                <li class="breadcrumb-item active">Crear Supervisor</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de Creación</h5>

                        <!-- Formulario de Creación de Supervisor -->
                        <form action="{{ route('supervisores.store') }}" method="POST">
                            @csrf
                            
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="apellido_pat" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellido_pat" name="apellido_pat" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="apellido_mat" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellido_mat" name="apellido_mat" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="edad" class="form-label">Edad</label>
                                    <input type="number" class="form-control" id="edad" name="edad" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="codigo_postal" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="sexo" class="form-label">Sexo</label>
                                    <select class="form-control" id="sexo" name="sexo" required>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    
                                </div>

                                <div class="col-md-4">
                                    <label for="rol" class="form-label">Rol</label>
                                    <input type="text" class="form-control" id="rol" name="rol" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="puesto" class="form-label">Puesto</label>
                                    <input type="text" class="form-control" id="puesto" name="puesto" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    <a href="{{ route('supervisores.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </form><!-- End Formulario de Creación de Supervisor -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
