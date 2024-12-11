<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenComprasTable extends Migration
{
    public function up()
    {
        Schema::create('orden_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proveedor_id')->constrained()->onDelete('cascade'); // Relación con Proveedor
            $table->date('fecha');
            $table->decimal('total', 10, 2);
            $table->foreignId('estado_id')->constrained('estado_ordens')->onDelete('cascade'); // Relación con EstadoOrden
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orden_compras');
    }
}
