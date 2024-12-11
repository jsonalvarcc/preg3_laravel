<?php

namespace App\Http\Controllers;

use App\Models\EstadoOrden;
use Illuminate\Http\Request;

class EstadoOrdenController extends Controller
{
    public function index()
    {
        $estados = EstadoOrden::all(); // Obtener todos los estados
        return view('estadoorden.index', compact('estados'));
    }

    public function create()
    {
        return view('estadoorden.create'); // Vista para agregar un nuevo estado
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        EstadoOrden::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('estadoorden.index')->with('success', 'Estado de orden creado exitosamente.');
    }
}
