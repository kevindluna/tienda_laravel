<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPStan\Rules\Functions\ReturnNullsafeByRefRule;

class Descuento extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si sigue la convención)
    protected $table = 'descuentos';

    // Nombre de la clave primaria (opcional si se llama 'id')
    protected $primaryKey = 'Id';

    // Si la clave primaria NO es autoincremental o no es un int, puedes agregar esto:
    // public $incrementing = true;
    // protected $keyType = 'int';

    // Los atributos que se pueden asignar masivamente
    protected $fillable = [
        'codigo',
        'nombre',
        'descuento',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'codigo', 'codigo');
    }
}
