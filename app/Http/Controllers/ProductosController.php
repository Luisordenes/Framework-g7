<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Stock;

class ProductosController extends Controller
{
    public function agregarProducto(){
        $categorias = Categoria::get();
        return view('Producto.agregar-producto',[
            'categorias' => $categorias
        ]);
    }

    public function grabarProducto(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'codigo' => 'required',
            'descripcion' => 'required',
            'image' => 'required',
            'categoria' => 'required'
        ]);

        $imagen = $request->file('image');
        
        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }

        //dd($request);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->codigo = $request->codigo;
        $producto->descripcion = $request->descripcion;
        $producto->image = $imagen_path;
        $producto->categoria_id = $request->categoria;
        $producto->save();

        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Producto.listar-productos',[
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function getImagen($filename){
        $file = \Storage::disk('imagenes')->get($filename);
        return new Response($file, 200);
    }

    public function listarProducto(){
        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Producto.listar-productos',[
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function consultarProducto($dato){

        $productos = Producto::where('nombre', 'LIKE', '%'.$dato.'%')->orWhere('codigo', 'LIKE', '%'.$dato.'%')->get();
        
        return view('/Producto.listar-productos',[
            'productos' => $productos
        ]);
    }

    public function editarProducto($id){
        $producto = Producto::where('id', $id)->get();
        $categorias = Categoria::get();

        return view('/producto/editar-producto',[
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }

    public function regrabarProducto(Request $request, $id){
        $this->validate($request,[
            'nombre' => 'required',
            'codigo' => 'required',
            'descripcion' => 'required',
            'image' => 'required',
            'categoria' => 'required'
        ]);

        $imagen = $request->file('image');
        
        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }

        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->codigo = $request->codigo;
        $producto->descripcion = $request->descripcion;
        $producto->image = $imagen_path;
        $producto->categoria_id = $request->categoria;
        $producto->save();

        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Producto.listar-productos',[
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function eliminarProducto($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();

        $productos = Producto::get();
        $categorias = Categoria::get();
        
        return view('Producto.listar-productos',[
            'productos' => $productos,
            'categorias' => $categorias
        ]);
    }

    public function stockProducto($id){
        $sucursales = Sucursal::get();
        $stocks = Stock::get();
        $producto = Producto::where('id', $id)->get();
        $categorias = Categoria::get();

        return view('Producto.stock-producto',[
            'stocks' => $stocks,
            'sucursales' => $sucursales,
            'producto' => $producto,
            'categorias' => $categorias
        ]);
    }
}
