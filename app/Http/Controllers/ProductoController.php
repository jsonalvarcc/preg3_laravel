<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'categoria_id' => 'nullable|exists:categorias,id',  // Categoria seleccionada
            'nueva_categoria' => 'nullable|string|max:255|unique:categorias,nombre', // Nueva categoria
        ]);
    
        // Si se proporcionó una nueva categoría, la creamos
        if ($request->filled('nueva_categoria')) {
            $categoria = Categoria::create([
                'nombre' => $request->nueva_categoria
            ]);
            $categoria_id = $categoria->id;
        } else {
            // Si no se proporcionó una nueva categoría, usamos la seleccionada
            $categoria_id = $request->categoria_id;
        }
    
        // Crear el producto con la categoría
        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'categoria_id' => $categoria_id,
        ]);
    
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }
    

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
    }
}
