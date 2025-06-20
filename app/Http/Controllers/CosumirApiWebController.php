<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\Student\StudentApiService;

class CosumirApiWebController extends Controller
{
    public function index(StudentApiService $service)
    {
        $estudiantes = $service->obtenerTodosEstudiantes();
        return view('students.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request, StudentApiService $service)
    {
        // NO usar try-catch aquí, Laravel manejará los errores de validación por sí solo
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'lenguage' => 'required|string'
        ]);

        // Si llega aquí, la validación pasó
        $service->crearEstudiante($validated);

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado exitosamente');
    }

    public function show(StudentApiService $service, string $id)
    {
        $estudiante = $service->obtenerEstudiante($id);
        return view('students.show', compact('estudiante'));
    }

    public function edit(StudentApiService $service, string $id)
    {
        $estudiante = $service->obtenerEstudiante($id);
        return view('students.edit', compact('estudiante'));
    }

    public function update(StudentApiService $service, Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'lenguage' => 'nullable|string'
        ]);

        $service->actualizarEstudiante($validated, $id);

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado exitosamente');
    }

    public function destroy(StudentApiService $service, string $id)
    {
        $service->eliminarEstudiante($id);
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado exitosamente');
    }
}
