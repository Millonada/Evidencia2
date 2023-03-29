@extends('layouts.app')
@section('title')
Nuevo producto
@endsection
@section('slot')
<form action="" method="post">
    <input name="nombre"></input>
    <input name="descripcion"></input>
    <input name="foto" type="file"></input>
    <input name="precio"></input>
    <input name="stock"></input>
    <buttom type="submit">Agregar</buttom>
</form>
@endsection