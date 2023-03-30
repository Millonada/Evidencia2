@extends('layouts.app')
@section('title')
Nuevo producto
@endsection
@section('slot')

<form action="{{ url('/productos') }}" method="post" enctyper="multipart/form-data">
@csrf
@include('productos.form');
</form>
@endsection
