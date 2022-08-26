@extends('layouts.master')
@section('title', 'Agregando Stock')
@section('header')
    <hr>
    <h1>Agregar stock</h1>
    <hr>
@stop

@section('content')
<hr>
    <div class="row">
        <form action="{{url('/stock/grabar')}}" method="post">
        @csrf

        <div class="mb-4">
            <label for="producto">Producto: </label>
            <select class="form-select" id="producto" name="producto">
                <option selected value="">Seleccione un producto</option>
                @foreach($productos as $producto)
                <option value={{ $producto->id }}>{{ $producto->nombre }} - {{ $producto->descripcion }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="sucursal">Agregar a Sucursal: </label>
            <select class="form-select" id="sucursal" name="sucursal">
                <option selected value="">Seleccione Sucursal</option>
                @foreach($sucursales as $sucursal)
                <option value={{ $sucursal->id }}>{{ $sucursal->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="cantidad" class="form-label">Cantidad: </label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>
        <div class="mb-4">
            <label for="precio" class="form-label">Precio: </label>
            <input type="number" class="form-control" id="precio" name="precio">
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
     
        <button type="submit" class="btn btn-primary">Agregar</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop