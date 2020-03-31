<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelajes')->insert([
            'medida' => 'corto'
        ]);
        DB::table('pelajes')->insert([
            'medida' => 'medio  '
        ]);
        DB::table('pelajes')->insert([
            'medida' => 'largo'
        ]);
        DB::table('tallas')->insert([
            'medida' => 'chica'
        ]);
        DB::table('pelajes')->insert([
            'medida' => 'media'
        ]);
        DB::table('pelajes')->insert([
            'medida' => 'grande'
        ]);
        DB::table('provincias')->insert([
            'nombre' => 'La Pampa'
        ]);
        DB::table('localidades')->insert([
            'nombre' => 'General Pico',
            'cp' => '6360',
            'id_provincia' => 1
        ]);
    }
}
