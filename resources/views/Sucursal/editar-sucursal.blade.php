@extends('layouts.master')
@section('title', 'Editando Sucursal')
@section('header')
    <h2>Edición sucursal</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/sucursal/regrabar/'.$sucursal[0]->id)}}" method="post">
        @csrf
        
        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $sucursal[0]->nombre }}">
        </div>
        <div class="mb-4">
            <label for="direccion" class="form-label">Dirección: </label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $sucursal[0]->direccion }}">
        </div>
        <div class="mb-4">
            <label for="comuna" class="form-label">Comuna: </label>
            <input type="text" class="form-control" id="comuna" name="comuna" value="{{ $sucursal[0]->comuna }}">
        </div>
        <div class="mb-4">
            <label for="ciudad" class="form-label">Ciudad: </label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $sucursal[0]->ciudad }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop