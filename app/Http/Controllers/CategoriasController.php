<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Producto;
use App\Models\Stock;

class CategoriasController extends Controller
{
    public function agregarCategoria(){
        return view('/Categoria/agregar-categoria');
    }

    public function grabarCategoria(Request $request){
        
        $this->validate($request,[
            'nombre' => 'required' 
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function listarCategoria(){
        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);

    }

    public function editarCategoria($id){

        $categoria = Categoria::where('id', $id)->get();

        return view('/Categoria/editar-categoria',[
            'categoria' => $categoria
        ]);
    }

    public function regrabarCategoria(Request $request, $id){
        $this->validate($request,[
            'nombre' => 'required' 
        ]);
        
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function mensajeCategoria($id){
        $categoria = Categoria::where('id', $id)->get();

        return view('/Categoria/mensaje-categoria',[
            'categoria' => $categoria,
        ]);
    }

    public function eliminarCategoria($id){
        $productos = Producto::get();
        $stocks = Stock::get();
        foreach($productos as $producto){
            if($producto->categoria_id == $id){
                foreach($stocks as $stock){
                    if($producto->id == $stock->producto_id){
                        $stock = Stock::findOrFail($stock->id);
                        $stock->delete();
                    }
                }
                $producto = Producto::findOrFail($producto->id);
                $producto->delete();
            }
        }
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function stockCategoria($id){
        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $productos = Producto::where('categoria_id', $id)->get();
        $categoria = Categoria::where('id', $id)->get();
        
        return view('Categoria.stock-categoria',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'productos' => $productos,
            'categoria' => $categoria
        ]);
    }
}
