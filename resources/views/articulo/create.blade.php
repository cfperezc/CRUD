@extends('adminlte::page')

@section('title', 'CRUD CON LARAVEL')

@section('content_header')
    <h1>Crear Articulo</h1>
@stop

@section('content')
    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" class="form-control"  tabindex="1" id="codigo" name="codigo">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" tabindex="2" id="descripcion" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" class="form-control" tabindex="3" id="cantidad" name="cantidad">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any"  value="0.00"  class="form-control"  id="precio" name="precio">
        </div>
        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Agregar</button>  
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop