@extends('layouts.master')
@section('title', 'Eliminando Sucursal')
@section('header')
    <h1>Eliminando Sucursal</h1>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <h4>ESTA SEGURO DE ELIMINAR LA SUCURSAL {{ $sucursal[0]->nombre }}?</h4>
        <p style="color:red;">Aviso Importante! Se eliminaran todos los stock de esta sucursal!!!</p>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <a href="/sucursal/eliminar/{{ $sucursal[0]->id }}" type="button" class="btn btn-warning">SI</a>
        <a href="/sucursal/listar" type="button" class="btn btn-secondary">NO</a>
    </div>
@stop

@section('footer')

@stop