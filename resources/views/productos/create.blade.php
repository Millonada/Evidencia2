@extends('layouts.app')
@section('title')
Nuevo producto
@endsection
@section('content')

<div class="container">

    <form action= "{{ url('/productos') }}" method="post" enctype="multipart/form-data" >
    @csrf
    @include('productos.form', ['modo'=>'Crear']);
    </form>
</div>

@endsection
