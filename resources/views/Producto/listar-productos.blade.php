@extends('layouts.master')
@section('title', 'Listado productos')
@section('header')
    <hr>
    <h2>Listado Productos</h2>
    <br><a href="/producto/agregar" type="button" class="btn btn-primary">Agregar Producto</a><br>
    <hr>
@stop

@section('content')
    <div class="row">
        @foreach($productos as $producto)
            <div class="col-3">
                <div class="card">
                    @if(Storage::disk('imagenes')->has($producto->image))
                        <img src="{{ url('/miniatura/'.$producto->image) }}" alt="{{$producto->nombre}}">
                    @else
                        <img src="{{$producto->image}}" alt="{{$producto->nombre}}">
                    @endif
                    
                    <div class="card-body">
                        <h4 class="card-title">{{$producto->nombre}}</h4>
                        <h6 class="card-title">{{$producto->codigo}}</h6>
                        <p class="card-text">{{$producto->descripcion}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group btn-group-xs" role="group">
                            <a href="/producto/editar/{{ $producto->id }}" type="button" class="btn btn-success">Modificar</a>
                            <a href="/producto/stock/{{ $producto->id }}" type="button" class="btn btn-warning">Stock</a>
                            <a href="/producto/eliminar/{{ $producto->id }}" type="button" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('footer')

@stop