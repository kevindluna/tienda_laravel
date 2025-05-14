<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrecioProducto extends Model
{
    use HasFactory;

    protected $table = 'precios_productos';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'producto_codigo',
        'id_paquete',
        'id_medida',
        'precio_actual',
        'precio_anterior'
    ];

    public function paquete()
    {
        return $this->belongsTo(Paquete::class, 'id_paquete', 'id');
    }

    public function medida()
    {
        return $this->belongsTo(Medida::class, 'id_medida', 'id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_codigo', 'codigo');
    }
}
