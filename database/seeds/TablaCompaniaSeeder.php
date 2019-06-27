<?php

use Illuminate\Database\Seeder;

class TablaCompaniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('compania')->insert([
                'Nombre' => 'Pepeluche',
                'CUIL' =>'9856663',
                'Direccion'=>'La villa 1-11-14',
                'Logo'=>'',
                'Telefono'=>'952236',
            ]);
    }
}
