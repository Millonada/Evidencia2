@extends('layouts.app')
@section('title')
Editar producto
@endsection
@section('content')
<div class="container">
    <form action="{{ url('/productos/'.$productos->id) }}" method= "post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('productos.form', ['modo'=>'Editar']);
    </form>
</div>
@endsection