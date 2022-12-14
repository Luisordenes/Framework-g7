@extends('layouts.master')
@section('title', 'Listado Categorias')
@section('header')
    <hr>
    <h2>Listar categorias</h2><br><a href="/categoria/agregar" type="button" class="btn btn-primary">Agregar Categoria</a><br>
    <hr>
@stop

@section('content')
    <div class="row">
        @foreach($categorias as $categoria)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$categoria->nombre}}</h4>
                        <p class="card-text text-muted">{{ \FormatTime::LongTimeFilterCreated($categoria->created_at) }}</p>
                        <p class="card-text text-muted">{{ \FormatTime::LongTimeFilter($categoria->updated_at) }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="/categoria/editar/{{ $categoria->id }}" type="button" class="btn btn-success">Modificar</a>
                            <a href="/categoria/stock/{{ $categoria->id }}" type="button" class="btn btn-warning">Stock</a>
                            <a href="/categoria/mensaje/{{ $categoria->id }}" type="button" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('footer')

@stop