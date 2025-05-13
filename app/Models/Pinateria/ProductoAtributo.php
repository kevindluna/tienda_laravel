<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Model;

class ProductoAtributo extends Model
{
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    // Nombre de la tabla
    protected $table = 'producto_atributo';

    // Nombre de la clave primaria
    protected $primaryKey = 'id';

    // Atributos que se pueden asignar
    protected $fillable = [
        'producto_codigo',
        'id_valor_atributo',
    ];

    // Relaciones con otras tablas
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_codigo', 'codigo');
    }

    public function valores()
    {
        return $this->belongsTo(ValorAtributo::class, 'id_valor_atributo', 'id');
    }
}
