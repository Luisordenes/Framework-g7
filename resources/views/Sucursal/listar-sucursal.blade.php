@extends('layouts.master')
@section('title', 'Listado Sucursales')
@section('header')
    <hr>
    <h2>Listado sucursales</h2>
    <br><a href="/sucursal/agregar" type="button" class="btn btn-primary">Agregar Sucursal</a><br>
    <hr>
@stop

@section('content')
    <div class="row">
        @foreach($sucursales as $sucursal)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$sucursal->nombre}}</h3>
                        <h5 class="card-title">{{$sucursal->direccion}}</h5>
                        <p class="card-text">{{$sucursal->comuna}} <br> {{$sucursal->ciudad}}</p>
                        <p class="card-text text-muted">{{ \FormatTime::LongTimeFilterCreated($sucursal->created_at) }}</p>
                        <p class="card-text text-muted">{{ \FormatTime::LongTimeFilter($sucursal->updated_at) }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group">
                            <a href="/sucursal/editar/{{ $sucursal->id }}" type="button" class="btn btn-success">Modificar</a>
                            <a href="/sucursal/stock/{{ $sucursal->id }}" type="button" class="btn btn-warning">Stock</a>
                            <a href="/sucursal/mensaje/{{ $sucursal->id }}" type="button" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('footer')

@stop