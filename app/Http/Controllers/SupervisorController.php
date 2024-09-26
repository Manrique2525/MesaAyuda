<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $supervisores = Supervisor::all();
        return view('supervisores.index', compact('supervisores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supervisores.create'); // Asegúrate de tener una vista create.blade.php en resources/views/supervisores/
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_pat' => 'required|string|max:255',
            'apellido_mat' => 'required|string|max:255',
            'edad' => 'required|integer',
            'codigo_postal' => 'required|string|max:10',
            'fecha_nacimiento' => 'required|date',
            'sexo' => 'required|string|in:M,F',
            'rol' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
        ]);

        Supervisor::create($request->all());

        return redirect()->route('supervisores.index')->with('success', 'Supervisor creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supervisor $supervisor)
    {
        // Muestra un supervisor específico
        return view('supervisores.show', compact('supervisor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supervisor $supervisor)
{
    return view('supervisores.edit', compact('supervisor')); // Asegúrate de tener una vista edit.blade.php en resources/views/supervisores/
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supervisor $supervisor)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido_pat' => 'required|string|max:255',
        'apellido_mat' => 'required|string|max:255',
        'edad' => 'required|integer',
        'codigo_postal' => 'required|string|max:10',
        'fecha_nacimiento' => 'required|date',
        'sexo' => 'required|string|in:M,F',
        'rol' => 'required|string|max:255',
        'puesto' => 'required|string|max:255',
    ]);

    $supervisor->update($request->all());

    return redirect()->route('supervisores.index')->with('success', 'Supervisor actualizado con éxito.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encuentra el supervisor por su ID
        $supervisor = Supervisor::find($id);
        $supervisor->delete();

        return redirect()->route('supervisores.index')->with('success', 'Supervisor eliminado con éxito.');
    }
}
