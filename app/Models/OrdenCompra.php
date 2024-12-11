<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    use HasFactory;

    // Definimos los campos que se pueden asignar masivamente
    protected $fillable = ['proveedor_id', 'fecha', 'total', 'estado_id'];

    // Relación con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    // Relación con EstadoOrden
    public function estado()
    {
        return $this->belongsTo(EstadoOrden::class);
    }
}
