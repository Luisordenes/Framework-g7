@extends('layouts.master')
@section('title', 'Editando productos')
@section('header')
    <h1>Edición Producto</h1>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/producto/regrabar/'.$producto[0]->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto[0]->nombre }}">
        </div>
        <div class="mb-4">
            <label for="codigo" class="form-label">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $producto[0]->codigo }}">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="form-label">Descripción: </label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto[0]->descripcion }}">
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

        <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop