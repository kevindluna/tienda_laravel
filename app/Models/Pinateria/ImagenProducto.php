<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pinateria\Producto;

class ImagenProducto extends Model
{
    protected $table = 'imagenes_productos';

        // Nombre de la clave primaria
    protected $primaryKey = 'id';

    protected $fillable = [
        'url_imagen',
        'descripcion',
        'orden',
        'producto_codigo'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_codigo', 'codigo');
    }
}
