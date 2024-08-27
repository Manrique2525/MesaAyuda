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

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <!-- Table with stripped rows -->
                        <a href="{{ route('supervisores.create') }}" class="btn btn-primary btn-sm">Crear</a>
                            
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Edad</th>
                                    <th>Código Postal</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Sexo</th>
                                    <th>Rol</th>
                                    <th>Puesto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($supervisores as $supervisor)
                                    <tr>
                                        <td>{{ $supervisor->nombre }}</td>
                                        <td>{{ $supervisor->apellido_pat }}</td>
                                        <td>{{ $supervisor->apellido_mat }}</td>
                                        <td>{{ $supervisor->edad }}</td>
                                        <td>{{ $supervisor->codigo_postal }}</td>
                                        <td>{{ $supervisor->fecha_nacimiento }}</td>
                                        <td>{{ $supervisor->sexo }}</td>
                                        <td>{{ $supervisor->rol }}</td>
                                        <td>{{ $supervisor->puesto }}</td>
                                        <td>
                                            <a href="{{ route('supervisores.show', $supervisor) }}" class="btn btn-primary btn-sm">Ver</a>
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
