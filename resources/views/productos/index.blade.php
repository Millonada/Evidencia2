@extends('layouts.app')
@section('title')
Inventario
@endsection
@section('slot')

<div>
    <a href="{{route('productos.create')}}">Agregar nuevo</a>
</div>
<table>
    <thead>
     <tr>
         <th>id</th>
         <th>Foto</th>
         <th>Nombre</th>
         <th>Descripcion</th>
         <th>Precio</th>
         <th>Stock</th>
         <th>Acciones</th>
     </tr>
    </thead>
    <tbody>
    @foreach ($productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>
        <img 
        src="{{ asset('storage').'/'.$producto->foto }}" 
        width="100" alt="" srcset="">
        </td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->descripcion}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->cantidadAlmacen}}</td>
        <td> 
            <a href= "{{ url('/productos/'.$producto->id.'/edit') }}" > 
                Editar
            </a>

            <form action="{{url('/productos/'.$producto->id)}} " method="post">
                    @csrf
                    {{ method_field('DELETE')}}    
                    <input type="submit" onclick= "return confirm('¿Quieres borrar?')" 
                        value="Borrar">
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection