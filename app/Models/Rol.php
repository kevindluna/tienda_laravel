<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'roles';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'rol',
    ];

    // Relacion de uno a muchos
    public function users()
    {
        return $this->belongsTo(User::class, 'id_rol', 'id');
    }
}
