<?php

namespace App\Http\Controllers;



use App\Models\OrdenCompra;
use App\Models\Proveedor;
use App\Models\EstadoOrden;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    // Mostrar todas las órdenes de compra
    public function index()
    {
        $ordenesCompra = OrdenCompra::all();
        return view('orden_compras.index', compact('ordenesCompra'));
    }

    // Mostrar formulario para crear una nueva orden de compra
    public function create()
    {
        $proveedores = Proveedor::all();
        $estados = EstadoOrden::all();
        return view('orden_compras.create', compact('proveedores', 'estados'));
    }

    // Almacenar nueva orden de compra
    public function store(Request $request)
    {
        $request->validate([
            'proveedor_id' => 'required|exists:proveedores,id',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
            'estado_id' => 'required|exists:estado_ordens,id',
        ]);

        OrdenCompra::create($request->all());

        return redirect()->route('orden_compras.index')->with('success', 'Orden de compra creada correctamente');
    }

    // Mostrar los detalles de una orden de compra
    public function show($id)
    {
        $ordenCompra = OrdenCompra::findOrFail($id);
        return view('orden_compras.show', compact('ordenCompra'));
    }

    // Mostrar formulario para editar una orden de compra
    public function edit($id)
    {
        $ordenCompra = OrdenCompra::findOrFail($id);
        $proveedores = Proveedor::all();
        $estados = EstadoOrden::all();
        return view('orden_compras.edit', compact('ordenCompra', 'proveedores', 'estados'));
    }

    // Actualizar la orden de compra
    public function update(Request $request, $id)
    {
        $request->validate([
            'proveedor_id' => 'required|exists:proveedores,id',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
            'estado_id' => 'required|exists:estado_ordens,id',
        ]);

        $ordenCompra = OrdenCompra::findOrFail($id);
        $ordenCompra->update($request->all());

        return redirect()->route('orden_compras.index')->with('success', 'Orden de compra actualizada correctamente');
    }

    // Eliminar una orden de compra
    public function destroy($id)
    {
        $ordenCompra = OrdenCompra::findOrFail($id);
        $ordenCompra->delete();

        return redirect()->route('orden_compras.index')->with('success', 'Orden de compra eliminada correctamente');
    }
}
