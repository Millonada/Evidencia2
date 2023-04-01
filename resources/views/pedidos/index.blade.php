@extends('layouts.app')
@section('title')
Pedidos
@endsection
@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <form action="{{route('pedidos.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="producto" class="form-label">Selecciona un producto</label>
                <select class="form-select" id="producto" name="producto_id">
                  @foreach ($productos as $producto)
                  <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input type="number" class="form-control" id="cantidad" name="cantidad">
            </div>
         
            <div class="mb-3">
              <label for="estatus_pedido" class="form-label">Estatus del pedido</label>
              <select class="form-select" id="estatus_pedido" name="estatus_pedido">
                <option value="pendiente" >Pendiente</option>
                <option value="en_proceso" selected>En proceso</option>
                <option value="entregado">Entregado</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar pedido</button>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Total</th>
                <th>Estatus del pedido</th>
                <th>Preview</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pedidos as $pedido)
              <tr>
                <td>{{$pedido->id}}</td>
                <td>{{$pedido->producto->nombre}}</td>
                <td>{{$pedido->cantidad}}</td>
                <td>{{$pedido->precio}}</td>
                <td>{{$pedido->cantidad * $pedido->precio}}</td>
                <td>
                    <img 
        src="{{ asset('storage').'/'.$pedido->producto->foto }}" 
        width="100" alt="" srcset="">
        </td>
                </td>
                <td>{{$pedido->estatus}}</td>
                <td>
                  <a href="{{route('pedidos.show',$pedido->id)}}" class="btn btn-primary" >Editar</a>
                  <form action="{{route('pedidos.delete',$pedido->id)}} " method="post">
                    @csrf
                    {{ method_field('DELETE')}}    
                    <input type="submit" onclick= "return confirm('¿Quieres borrar?')" 
                        value="Borrar">
            </form>
                </td>
              </tr>
              @endforeach
              <!-- Aquí se agregarían más filas con los registros de pedidos -->
            </tbody>
          </table>
          
      </div>
    </div>
</div>

@endsection