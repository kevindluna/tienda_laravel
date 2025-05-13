<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    use HasFactory;
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    protected $table = 'valor_garantia';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'garantia',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_garantia', 'id');
    }

}
