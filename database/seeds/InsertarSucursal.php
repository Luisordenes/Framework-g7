<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert(array(
            [
                'nombre' => 'Vitacura 1',
                'direccion' => 'Cerro colorado 5030',
                'comuna' => 'Vitacura',
                'ciudad' => 'Santiago'
            ],
            [
                'nombre' => 'Las condes 1',
                'direccion' => 'Padre hurtado 1200',
                'comuna' => 'Las condes',
                'ciudad' => 'Santiago'
            ],
            [
                'nombre' => 'Lo Barnechea 1',
                'direccion' => 'La dehesa 5001',
                'comuna' => 'Lo barnechea',
                'ciudad' => 'Santiago'
            ]
        ));
    }
}
