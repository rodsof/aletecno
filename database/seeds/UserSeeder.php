<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => 'user_nombre',
            'apellido' => 'user_apellido',
            'password' => bcrypt('password'),
            'administrador' => 1,
            'id_localidad' => 1,
            'calle' => '110',
            'numero' => '420',
            'dni' => '11111111'
        ]);
        DB::table('mascotas')->insert([
            'nombre' => 'mascota_nombre',
            'especie' => 'canino',
            'raza' => 'labrador',
            'sexo' => 1,
            'color' => 'mascota_color',
            'id_usuario' => DB::table('users')->select
            
        ]);
    }
}
