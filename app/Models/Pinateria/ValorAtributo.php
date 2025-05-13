<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Model;

class ValorAtributo extends Model
{
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    // Nombre de la tabla
    protected $table = 'valores_atributo';

    // Nombre de la clave primaria
    protected $primaryKey = 'id';

    // Campos de la tabla
    protected $fillable = [
        'id_atributo',
        'valor'
    ];

    // Relaciones con otras tablas
    public function atributo()
    {
        return $this->belongsTo(Atributo::class, 'id_atributo', 'id');
    }

}
