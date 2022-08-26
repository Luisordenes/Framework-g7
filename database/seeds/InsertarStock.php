<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarStock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert(array(
            [
                'precio' => 600,
                'cantidad' => 10,
                'producto_id' => 1,
                'sucursal_id' => 3
            ],
            [
                'precio' => 1200,
                'cantidad' => 5,
                'producto_id' => 2,
                'sucursal_id' => 2
            ],
            [
                'precio' => 1500,
                'cantidad' => 8,
                'producto_id' => 3,
                'sucursal_id' => 1
            ],
            [
                'precio' => 800,
                'cantidad' => 10,
                'producto_id' => 4,
                'sucursal_id' => 1
            ],
            [
                'precio' => 500,
                'cantidad' => 20,
                'producto_id' => 5,
                'sucursal_id' => 2 
            ],
            [
                'precio' => 600,
                'cantidad' => 25,
                'producto_id' => 6,
                'sucursal_id' => 3
            ],
            [
                'precio' => 1500,
                'cantidad' => 15,
                'producto_id' => 7,
                'sucursal_id' => 1
            ],
            [
                'precio' => 1600,
                'cantidad' => 10,
                'producto_id' => 8,
                'sucursal_id' => 2
            ],
            [
                'precio' => 1200,
                'cantidad' => 20,
                'producto_id' => 9,
                'sucursal_id' => 3
            ],
            [
                'precio' => 1300,
                'cantidad' => 20,
                'producto_id' => 10,
                'sucursal_id' => 1
            ]
        ));
    }
}
