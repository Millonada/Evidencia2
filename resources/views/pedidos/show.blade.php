@extends('layouts.app')
@section('title')
Pedidos
@endsection
@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-12 ">
          <h1>Editar</h1>
        <form action="{{route('pedidos.update',$pedido->id)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="producto" class="form-label">Selecciona un producto</label>
                <select class="form-select" id="producto" name="producto_id">
                    <option  disabled selected>Selecciona producto</option>
                  @foreach ($productos as $producto)
                  <option value="{{$producto->id}}" {{$pedido->idProducto == $producto->id ?? 'selected'}}>{{$producto->nombre}}</option>
                  @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input type="number" class="form-control" value="{{$pedido->cantidad ?? $pedido->cantidad }}" id="cantidad" name="cantidad">
            </div>
         
            <div class="mb-3">
              <label for="estatus_pedido" class="form-label">Estatus del pedido</label>
              <select class="form-select" id="estatus_pedido" name="estatus_pedido">
                <option value="pendiente" >Pendiente</option>
                <option value="en_proceso" selected>En proceso</option>
                <option value="entregado">Entregado</option>
              </select>
            </div>
            <button type="submit" class="btn btn-warning">Editar pedido</button>
          </form>
          
          
      </div>
    </div>
</div>

@endsection