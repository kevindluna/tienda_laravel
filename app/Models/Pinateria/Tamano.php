<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamano extends Model
{
    use HasFactory;

    protected $connection = 'mysqlPinateria';

    protected $table = 'tamanos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
    ];

    public function  precios_productos()
    {
        return $this->hasMany(Producto::class, 'id_tamano', 'id');
    }
}
