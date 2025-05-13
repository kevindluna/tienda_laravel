<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

    // Nombre de la tabla
    protected $table = 'atributos';

    // Clave primaria
    protected $primaryKey = 'id';

    // Atributos que se pueden asignar
    protected $fillable = [
        'nombre',
    ];

    public function valores()
    {
        return $this->hasMany(ValorAtributo::class, 'id_atributo', 'id');
    }


}
