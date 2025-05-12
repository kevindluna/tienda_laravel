<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPStan\Rules\Functions\ReturnNullsafeByRefRule;

class Descuento extends Model
{
    use HasFactory;

    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    // Nombre de la tabla (opcional si sigue la convención)
    protected $table = 'descuentos';

    // Nombre de la clave primaria (opcional si se llama 'id')
    protected $primaryKey = 'id';

    // Si la clave primaria NO es autoincremental o no es un int, puedes agregar esto:
    // public $incrementing = true;
    // protected $keyType = 'int';

    // Los atributos que se pueden asignar masivamente
    protected $fillable = [
        'producto_codigo',
        'porcentaje',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'codigo', 'codigo');
    }
}
