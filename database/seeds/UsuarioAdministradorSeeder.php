<?php

use Illuminate\Database\Seeder;
use SistAlmacen\Models\Admin\Persona;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$idPersona = DB::table('persona')->where('Email', 'Pepeluche@gmail.com')->get();

        DB::table('usuario')->insert([
            'Email' => 'Pepeluche@gmail.com',
            'clave' => bcrypt('12345'),
            'persona_id' => 1,
        ]);
    }
}
