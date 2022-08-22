<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre' => 'Fruta'
            ],
            [
                'nombre' => 'Verdura'
            ],
            [
                'nombre' => 'Legumbre'
            ]
        ));
    }
}
