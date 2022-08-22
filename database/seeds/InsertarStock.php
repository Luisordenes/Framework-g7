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
            ]
        ));
    }
}
