<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Model;

class Precios extends Model
{
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    // Nombre de la tabla
    protected $table = 'precios_productos';

    // Nombre de la clave primaria
    protected $primaryKey = 'id';

    // Campos de la tabla
    protected $fillable = [
        'producto_codigo',
        'precio_actual',
        'precio_anterior'
    ];

    // Relación con la tabla Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_codigo', 'codigo');
    }
}
