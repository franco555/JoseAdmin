<?php

use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=[
            'Super',
            'Administrador',
            'Cliente'
        ];

        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'Nombre' => $value,
                'IsActive' =>true
            ]);
        }
    }
}
