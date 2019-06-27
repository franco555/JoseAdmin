<?php

use Illuminate\Database\Seeder;

class TablaPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
            'Nombre' => 'Jose',
            'Apellido' =>'Condori',
            'DNI'=>'1455454',
            'Direccion'=>'La villa',
            'Telefono'=>'952236',
            'Email' => 'Pepeluche@gmail.com',
            'Foto' =>'',
            'FechaInicio'=>'2018-12-31 23:59:59',
        ]);
    }
}
