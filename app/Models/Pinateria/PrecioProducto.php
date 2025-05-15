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
        'id_presentacion',
        'id_tamano',
        'precio_actual',
        'precio_anterior'
    ];

    public function presentacion()
    {
        return $this->belongsTo(Presentacion::class, 'id_presentacion', 'id');
    }

    public function tamano()
    {
        return $this->belongsTo(Tamano::class, 'id_tamano', 'id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_codigo', 'codigo');
    }
}
