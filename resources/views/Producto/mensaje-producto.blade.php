@extends('layouts.master')
@section('title', 'Eliminando Producto')
@section('header')
    <h1>Eliminando Producto</h1>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <h4>¿ESTA SEGURO DE ELIMINAR EL PRODUCTO [{{ $producto[0]->nombre }}]?</h4>
        <p style="color:red;">Aviso Importante! Se eliminaran todos los stock de este producto!!!</p>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <a href="/producto/eliminar/{{ $producto[0]->id }}" type="button" class="btn btn-warning">SI</a>
        <a href="/producto/listar" type="button" class="btn btn-secondary">NO</a>
    </div>
@stop

@section('footer')

@stop