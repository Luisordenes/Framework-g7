@extends('layouts.master')
@section('title', 'Editando Stock')
@section('header')
    <hr>
    <h1>Editar stock</h1>
    <hr>
@stop

@section('content')
<hr>
    <div class="row">
        <form action="{{url('/stock/regrabar/'.$stock[0]->id)}}" method="post">
        @csrf

        <div class="mb-4">
            <label for="producto">Producto: </label>
                @foreach($productos as $producto)
                    @if($stock[0]->producto_id == $producto->id)
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" disabled>
                    @endif    
                @endforeach
        </div>
        <div class="mb-4">
            <label for="sucursal">Sucursal: </label>
                @foreach($sucursales as $sucursal)
                    @if($stock[0]->sucursal_id == $sucursal->id)
                        <input type="text" class="form-control" id="sucursal" name="sucursal" value="{{ $sucursal->nombre }}" disabled>
                    @endif
                @endforeach
        </div>
        @foreach($productos as $producto)
            @if($stock[0]->producto_id == $producto->id)
                <div class="mb-4">
                    <label for="cantidad" class="form-label">Descripción: </label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->descripcion }}" disabled>
                </div>
            @endif    
        @endforeach
        <div class="mb-4">
        <div class="mb-4">
            <label for="cantidad" class="form-label">Cantidad: </label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $stock[0]->cantidad }}">
        </div>
        <div class="mb-4">
            <label for="precio" class="form-label">Precio: </label>
            <input type="number" class="form-control" id="precio" name="precio" value="{{ $stock[0]->precio }}">
        </div>

        <div class="btn-group btn-group-xs" role="group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="/stock/mensaje/{{ $stock[0]->id }}" type="button" class="btn btn-danger">Eliminar</a>
        </div>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop