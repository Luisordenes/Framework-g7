<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    public function stocks(){
        return $this->hasMany(Stock::class);
   }
}
