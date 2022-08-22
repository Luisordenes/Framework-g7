@extends('layouts.master')
@section('title', 'Listado Stock')
@section('header')
    <hr>
    <h2>Stock de {{ $producto[0]->nombre }}</h2>
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
                <th scope="col">Sucursal</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($stocks as $stock)
                @if($producto[0]->id == $stock->producto_id)
                    <tr>
                        <th scope="row">{{ $producto[0]->codigo }}</th>
                        <td>{{ $producto[0]->nombre }}</td>
                        @foreach($categorias as $categoria)
                            @if($categoria->id == $producto[0]->categoria_id)
                                <td>{{ $categoria->nombre }}</td>  
                            @endif
                        @endforeach
                        @foreach($sucursales as $sucursal)
                            @if($sucursal->id == $stock->sucursal_id)
                                <td>{{ $sucursal->nombre }}</td>  
                            @endif
                        @endforeach
                        <td>{{ $stock->cantidad }}</td>
                        <td>{{ $stock->precio }}</td>
                    </tr>            
                @endif   
            @endforeach                           
        </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop