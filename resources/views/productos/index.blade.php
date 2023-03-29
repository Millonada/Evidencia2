@extends('layouts.app')
@section('title')
Inventario
@endsection
@section('slot')

<div>
    <a href="{{route('producto.create')}}">Agregar nuevo</a>
</div>
<table>
    <thead>
     <tr>
         <th>id</th>
         <th>Nombre</th>
         <th>Descripcion</th>
         <th>foto</th>
         <th>Precio</th>
         <th>Stock</th>
     </tr>
    </thead>
    <tbody>
    @foreach ($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->foto}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->cantidadAlmacen}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection