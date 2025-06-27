@extends("layouts.main")

@section("titulo", "Etiqueta")

@section("contenido")
<h1 class="display-1 fw-bold text-white bg-dark">Artículo</h1>

<div class="container d-flex flex-wrap justify-content-center">
@forelse ($articulos ?? [] as $a)
<x-card autor="{{ $a->usuario->nombre }}" id="{{ $a->id }}" imagen="{{ $a->portada }}" titulo="{{ $a->titulo }}" descripcion="{{ $a->descripcion }}"></x-card>
@empty
<h1 class="text-center">No hay artículos con esta etiqueta</h1>
@endforelse
</div>
@endsection