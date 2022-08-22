<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Stock;
use App\Models\Producto;
use App\Models\Categoria;

class StockController extends Controller
{
    public function agregarStock(){
        $productos = Producto::get();
        $sucursales = Sucursal::get();

        return view('Stock.agregar-stock',[            
            'productos' => $productos,
            'sucursales' => $sucursales
        ]);
    }

    public function grabarStock(Request $request){
        $this->validate($request,[
            'producto' => 'required',
            'sucursal' => 'required',
            'cantidad' => 'required',
            'precio' => 'required'
        ]);

        //dd($request);

        $stock = new Stock();
        $stock->producto_id = $request->producto;
        $stock->sucursal_id = $request->sucursal;
        $stock->cantidad = $request->cantidad;
        $stock->precio = $request->precio;

        $stock->save();

        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function listarStock(){
        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function editarStock(){
        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Stock.editar-stock',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function editandoStock($id){
        $productos = Producto::get();
        $sucursales = Sucursal::get();
        $stock = Stock::where('id', $id)->get();

        return view('/Stock/editando-stock',[
            'stock' => $stock,
            'sucursales' => $sucursales,
            'productos' => $productos
        ]);
    }

    public function regrabarStock(Request $request, $id){
        $this->validate($request,[
            'cantidad' => 'required',
            'precio' => 'required'
        ]);

        //dd($request);

        $stock = Stock::findOrFail($id);

        $stock->cantidad = $request->cantidad;
        $stock->precio = $request->precio;
        $stock->save();

        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function mensajeStock($id){
        $stock = Stock::where('id', $id)->get();

        return view('/Stock/mensaje-stock',[
            'stock' => $stock,
        ]);
    }

    public function eliminarStock($id){
        $stock = Stock::findOrFail($id);
        $stock->delete();

        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }
}
