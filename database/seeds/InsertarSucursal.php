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
                'nombre' => 'Vitacura',
                'direccion' => 'Alonso de cordoba 5030',
                'comuna' => 'Vitacura',
                'ciudad' => 'Santiago'
            ],
            [
                'nombre' => 'Las condes',
                'direccion' => 'Padre hurtado 1200',
                'comuna' => 'Las condes',
                'ciudad' => 'Santiago'
            ],
            [
                'nombre' => 'Providencia',
                'direccion' => 'Suecia 5000',
                'comuna' => 'Providencia',
                'ciudad' => 'Santiago'
            ]
        ));
    }
}
