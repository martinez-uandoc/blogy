@extends("layouts.main")


@section("titulo", "Mi sitio web de Laravel")


@section("contenido")
<ul class="list-group list-group-horizontal mt-4 justify-content-center fs-2">
@foreach($etiquetas AS $e)
<li class="list-group-item">
    <a href="{{ route("sitio.etiqueta", ["nombre" => $e->nombre]) }}">{{ $e->nombre }}</a>
</li>
@endforeach
</ul>

<br>
<br>
<br>
<br>
<div class="container d-flex flex-wrap justify-content-center">
@foreach ($articulos as $a)
<x-card autor="{{ $a->usuario->nombre }}" id="{{ $a->id }}" imagen="{{ $a->portada }}" titulo="{{ $a->titulo }}" descripcion="{{ $a->descripcion }}"></x-card>
@endforeach
</div>


@endsection