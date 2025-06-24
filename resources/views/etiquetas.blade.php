@extends("layouts.main")

@section("titulo", "Etiqueta")

@section("contenido")
<h1 class="display-1 fw-bold text-white bg-dark">Artículo</h1>

<h4>{{ $artista }} <small>{{ $titulo }}</small></h4>
<a href="{{ $youtube }}">Ir al video</a>
@endsection