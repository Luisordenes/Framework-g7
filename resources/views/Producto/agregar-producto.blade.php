@extends('layouts.master')
@section('title', 'Agregando Producto')
@section('header')
    <hr>
    <h1>Agregar producto</h1>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/producto/grabar')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-4">
            <label for="codigo" class="form-label">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="form-label">Descripción: </label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <div class="mb-4">
            <label for="image" class="form-label">Imagen: </label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpg .png .jpeg">
        </div>
        <div class="mb-4">
            <label for="categoria">Categoria: </label>
            <select class="form-select" id="categoria" name="categoria">
                <option selected>Seleccione una categoria</option>
                @foreach($categorias as $categoria)
                <option value={{ $categoria->id }}>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
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

        <button type="submit" class="btn btn-primary">Crear</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop