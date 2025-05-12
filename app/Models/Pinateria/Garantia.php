<?php

namespace App\Models\Pinateria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garantia extends Model
{
    use HasFactory;
    // Nombre de la conexión a la base de datos
    protected $connection = 'mysqlPinateria';

}
