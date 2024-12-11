<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'contacto' => 'required',
            'dirección' => 'required',
        ]);

        Proveedor::create($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado con éxito.');
    }

    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id); // Asegúrate de que el modelo se llama 'Proveedor'
        return view('proveedores.edit', compact('proveedor'));
    }
    

    public function update(Request $request, $id)
    {
        // Validar los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'contacto' => 'required|string|max:255',
            'dirección' => 'required|string|max:255',
        ]);
    
        // Encontrar el proveedor y actualizar sus datos
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->nombre = $request->input('nombre');
        $proveedor->contacto = $request->input('contacto');
        $proveedor->dirección = $request->input('dirección');
        $proveedor->save(); // Guardar cambios en la base de datos
    
        // Redireccionar con mensaje de éxito
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente.');
    }
    

    public function destroy($id)
    {
        // Buscar el proveedor y eliminarlo
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
    
        // Redireccionar con un mensaje de éxito
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente.');
    }
    
}
