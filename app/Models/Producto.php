<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Campos que se permiten para asignación masiva
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'precio_venta',
        'stock',
        'id_categoria',
        'imagen',
    ];

    // Relación con categorías
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
