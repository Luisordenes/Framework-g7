@extends('layouts.master')
@section('title', 'Agregando Sucursal')
@section('header')
    <hr>
    <h2>Agregar sucursal</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/sucursal/grabar')}}" method="post">
        @csrf
        
        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-4">
            <label for="direccion" class="form-label">Dirección: </label>
            <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
        <div class="mb-4">
            <label for="comuna" class="form-label">Comuna: </label>
            <input type="text" class="form-control" id="comuna" name="comuna">
        </div>
        <div class="mb-4">
            <label for="ciudad" class="form-label">Ciudad: </label>
            <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        
        <button type="submit" class="btn btn-primary">Crear</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop

