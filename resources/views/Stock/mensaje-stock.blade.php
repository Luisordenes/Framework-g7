@extends('layouts.master')
@section('title', 'Eliminando Stock')
@section('header')
    <h1>Eliminando stock</h1>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <p>ESTA SEGURO DE ELIMINAR EL PRODUCTO?</p>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <a href="/stock/eliminar/{{ $stock[0]->id }}" type="button" class="btn btn-warning">SI</a>
        <a href="/stock/listar" type="button" class="btn btn-secondary">NO</a>
    </div>
@stop

@section('footer')

@stop