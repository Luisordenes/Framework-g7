<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Producto;
use App\Models\Stock;

class SucursalesController extends Controller
{
    public function agregarSucursal(){
        return view('/Sucursal/agregar-sucursal');
    }

    public function grabarSucursal(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'direccion' => 'required',
            'comuna' => 'required',
            'ciudad' => 'required'
        ]);

        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->comuna = $request->comuna;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->save();

        $sucursales = Sucursal::get();

        return view('Sucursal.listar-sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function listarSucursal(){
        $sucursales = Sucursal::get();

        return view('Sucursal.listar-sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function editarSucursal($id){
        $sucursal = Sucursal::where('id', $id)->get();

        return view('/Sucursal/editar-sucursal',[
            'sucursal' => $sucursal
        ]);
    }

    public function regrabarSucursal(Request $request, $id){
        $this->validate($request,[
            'nombre' => 'required',
            'direccion' => 'required',
            'comuna' => 'required',
            'ciudad' => 'required' 
        ]);
        
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->nombre = $request->nombre;
        $sucursal->direccion = $request->direccion;
        $sucursal->comuna = $request->comuna;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->save();

        $sucursales = Sucursal::get();

        return view('Sucursal.listar-sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function eliminarSucursal($id){
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();

        $sucursales = Sucursal::get();

        return view('Sucursal.listar-sucursal',[
            'sucursales' => $sucursales
        ]);
    }

    public function stockSucursal($id){
        $sucursal = Sucursal::where('id', $id)->get();
        $stocks = Stock::where('sucursal_id', $id)->get();
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Sucursal.stock-sucursal',[
            'stocks' => $stocks,
            'sucursal' => $sucursal,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

}
