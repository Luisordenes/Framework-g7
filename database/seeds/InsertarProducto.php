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
                'descripcion' => 'fruits-chile',
                'image' => 'https://elegifruta.com.ar/onepage/wp-content/uploads/2017/07/manzana_roja.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Lechuga',
                'codigo' => 'abc124',
                'descripcion' => 'Punto azul',
                'image' => 'https://supplyme.cl/supplyme-images/productos/800X800_5e97b1040d2b1-5e97b4265c443.jpg',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'Porotos',
                'codigo' => 'abc125',
                'descripcion' => 'iansa',
                'image' => 'https://cugat.cl/wp-content/uploads/2021/04/7801305004099-1.jpg',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'Melon',
                'codigo' => 'abc126',
                'descripcion' => 'fruits-chile',
                'image' => 'https://gazpacho.cl/wp-content/uploads/2021/11/melontuna.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Pera',
                'codigo' => 'abc127',
                'descripcion' => 'fruits-chile',
                'image' => 'http://www.frutas-hortalizas.com/img/fruites_verdures/presentacio/26.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Durazno',
                'codigo' => 'abc128',
                'descripcion' => 'fruits-chile',
                'image' => 'https://st.depositphotos.com/1002351/2489/i/600/depositphotos_24894339-stock-photo-ripe-peach-fruit.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'Apio',
                'codigo' => 'abc129',
                'descripcion' => 'Punto azul',
                'image' => 'https://supplyme.cl/supplyme-images/productos/800X800_5e97b1040849e-5e97b1b7c7bfc.jpg',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'Espinaca',
                'codigo' => 'abc130',
                'descripcion' => 'Huerta de peralta',
                'image' => 'https://laplazadejaen.com/wp-content/uploads/2019/07/JF-espinaca-fresca-324x324.jpg',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'Lentejas',
                'codigo' => 'abc131',
                'descripcion' => 'Wasil',
                'image' => 'https://cugat.cl/wp-content/uploads/2021/10/7801305004082.png',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'Garbanzos',
                'codigo' => 'abc132',
                'descripcion' => 'Wasil',
                'image' => 'https://mlzvcqhqkg62.i.optimole.com/3Z7FgGg-hpn7sMQi/w:auto/h:auto/q:75/https://www.mercadoditutti.cl/wp-content/uploads/garbanzos-1.jpg',
                'categoria_id' => 3
            ]
        ));
    }
}
