<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;

    protected $connection = 'mysqlPinateria';

    protected $table = 'medidas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
    ];

    public function  precios_productos()
    {
        return $this->hasMany(Producto::class, 'id_medida', 'id');
    }
}
