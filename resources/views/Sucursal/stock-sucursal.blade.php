@extends('layouts.master')
@section('title', 'Listado Stock')
@section('header')
    <hr>
    <h2>Stock de {{ $sucursal[0]->nombre }}</h2>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($stocks as $stock)
                        <tr>
                            @foreach($productos as $producto)
                                @if($stock->producto_id == $producto->id)
                                    <th scope="row">{{ $producto->codigo }}</th>
                                    <td>{{ $producto->nombre }}</td>
                                    @foreach($categorias as $categoria)
                                        @if($categoria->id == $producto->categoria_id && $stock->producto_id == $producto->id)
                                            <td>{{ $categoria->nombre }}</td>  
                                        @endif
                                    @endforeach 
                                @endif
                            @endforeach                  
                            <td>{{ $stock->cantidad }}</td>
                            <td>{{ $stock->precio }}</td>                            
                        </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop