<label for="nombre"> Nombre: </label>
<input name="nombre" id="nombre"></input><br>

<label for="descripcion"> Descripción: </label>
<input name="descripcion" id="descripcion"></input><br>

<label for="precio"> Precio: </label>
<input name="precio" id="precio"></input><br>
    
<label for="cantidadAlmacen"> Stock: </label>
<input name="cantidadAlmacen" id="cantidadAlmacen"></input><br>

<label for="foto"> Foto </label>
<input name="foto" type="file" id="foto"></input><br>

<input class = "btn btn-success" type="submit" value = "Agregar"><br>
<a href="{{route('productos.index')}}">Regresar</a>