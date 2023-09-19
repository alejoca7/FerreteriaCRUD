@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>
    
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
    
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver al Listado</a>
@endsection
