<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    // Nombre de la tabla (opcional si sigue la convención)
    protected $table = 'productos';

    // Nombre de la clave primaria (opcional si se llama 'id')
    protected $primaryKey = 'Id';

    // Si la clave primaria NO es autoincremental o no es un int, puedes agregar esto:
    // public $incrementing = true;
    // protected $keyType = 'int';

    // Los atributos que se pueden asignar masivamente
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'id_marca',
        'id_garantia',
        'id_categoria',
        'activo'
    ];

    public function descuento()
    {
        return $this->belongsTo(Descuento::class, 'codigo', 'codigo');    
    }
}
