<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    protected $table = 'categorias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_categoria', 'id');
    }
}
