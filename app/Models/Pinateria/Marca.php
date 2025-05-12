<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    protected $table = 'marcas';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'marca_id', 'id');
    }
}
