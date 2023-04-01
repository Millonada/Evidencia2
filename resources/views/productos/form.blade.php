
<h1>{{ $modo }} Productos</h1>

<div class = "form-group">
<br>
<label for="nombre"> Nombre: </label>
<input name="nombre" id="nombre"
value="{{ isset($productos->nombre)?$productos->nombre:'' }}" ><br>
</div>

<div class = "form-group">
<label for="descripcion"> Descripción: </label>
<input name="descripcion" id="descripcion"
value="{{ isset($productos->descripcion)?$productos->descripcion:'' }}" ><br>


<div class = "form-group">
<label for="precio"> Precio: </label>
<input name="precio" id="precio"
value="{{ isset($productos->precio)?$productos->precio:'' }}" ><br>
</div>


<div class = "form-group">
<label for="cantidadAlmacen"> Stock: </label>
<input name="cantidadAlmacen" id="cantidadAlmacen"
value="{{ isset($productos->cantidadAlmacen)?$productos->cantidadAlmacen:'' }}" ><br>
</div>


<div class = "form-group">
<label for="Foto"></label>
@if(isset($productos->foto))
<img class = "img-thumbnail img-fluid" src="{{ asset('storage').'/'.$productos->foto }}" width="100" alt="">
@endif
<input type="file" class = "form-control" name= "foto" value = "" id = "foto"><br>
</div>

<input class = "btn btn-success" type="submit" value = "{{ $modo }} Datos">
<a href="{{route('productos.index')}}">Regresar</a>


