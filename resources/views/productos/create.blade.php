@extends('layouts.app')
@section('title')
Nuevo producto
@endsection
@section('slot')

<form action="{{ url('/inventario/index') }}" method="post" enctyper="multipart/form-data">
@csrf
    <label for="Nombre"> Nombre: </label>
    <input name="nombre"></input><br>

    <label for="Descripcion"> Descripción: </label>
    <input name="descripcion"></input><br>

    <label for="Precio"> Precio: </label>
    <input name="precio"></input><br>
    
    <label for="Stock"> Stock: </label>
    <input name="stock"></input><br>

    <label for="Foto"> Foto </label>
    <input name="foto" type="file"></input><br>

    <buttom type="submit">Agregar</buttom><br>
    <a href="{{route('producto.index')}}">Regresar</a>
</form>
@endsection
