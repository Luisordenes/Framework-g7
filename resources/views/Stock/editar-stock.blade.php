@extends('layouts.master')
@section('title', 'Editar Stock')
@section('header')
    <h1>Editar stock</h1>
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
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Editar</th>
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
                                        @if($categoria->id == $producto->categoria_id)
                                            <td>{{ $categoria->nombre }}</td>  
                                        @endif
                                    @endforeach 
                                @endif
                            @endforeach 
                            @foreach($sucursales as $sucursal)
                                @if($sucursal->id == $stock->sucursal_id)
                                    <td>{{ $sucursal->nombre }}</td>  
                                @endif
                            @endforeach   
                            <td>{{ $stock->cantidad }}</td>
                            <td>{{ $stock->precio }}</td>
                            <td>{{ \FormatTime::LongTimeFilterCreated($stock->created_at) }}</td>
                            <td>{{ \FormatTime::LongTimeFilter($stock->updated_at) }}</td>
                            <td><a type="button" class="btn btn-secondary" href="/stock/editando/{{ $stock->id }}">&#9998;</a></td>
                        </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop