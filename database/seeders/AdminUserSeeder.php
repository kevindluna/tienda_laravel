<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // O el modelo que estés usando para usuarios
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'rol' => 'administrador'],
            ['id' => 2, 'rol' => 'usuario'],

        ]);

        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Cambia el email por el que desees
            [
                'name' => 'Admin',
                'lastname' => 'Tienda',
                'id_rol' => 1,
                'password' => Hash::make('1234567890'), // Cambia la contraseña por una segura
            ]
        );

    }
}
