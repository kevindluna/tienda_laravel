<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    use HasFactory;

    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    protected $table = 'presentaciones';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'cantidad',
    ];

    public function precios_productos()
    {
        return $this->hasMany(PrecioProducto::class, 'id_presentacion', 'id');
    }
}
