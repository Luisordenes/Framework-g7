<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'stocks';

    public function productos(){
        return $this->belongsTo(Producto::class,(producto_id));
    }

    public function sucursales(){
        return $this->belongsTo(Sucursal::class,(sucursal_id));
    }
}
