<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array(
            [
                'nombre' => 'Manzana',
                'codigo' => 'abc123',
                'descripcion' => 'Manzana roja',
                'image' => 'https://elegifruta.com.ar/onepage/wp-content/uploads/2017/07/manzana_roja.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Lechuga',
                'codigo' => 'abc124',
                'descripcion' => 'Lechuga costina',
                'image' => 'https://supplyme.cl/supplyme-images/productos/800X800_5e97b1040d2b1-5e97b4265c443.jpg',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'Porotos',
                'codigo' => 'abc125',
                'descripcion' => 'Porotos negros',
                'image' => 'https://cugat.cl/wp-content/uploads/2021/04/7801305004099-1.jpg',
                'categoria_id' => 3
            ]
        ));
    }
}
