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
        return $this->belongsTo(Descuento::class, 'codigo', 'producto_codigo');    
    }

    public function garantia()
    {
        return $this->belongsTo(Garantia::class, 'id_garantia', 'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    public function precios()
    {
        return $this->belongsTo(Precios::class, 'codigo', 'producto_codigo');
    }

    public function imagenes()
    {
        return $this->hasMany(ImagenProducto::class, 'producto_codigo', 'codigo');
    }

    public function atributos()
    {
        return $this->hasMany(ProductoAtributo::class, 'producto_codigo', 'codigo');
    }
}
