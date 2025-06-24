@extends("layouts.main")


@section("titulo", "Artículos")


@section("contenido")
<h1 class="display-1 fw-bold text-white bg-dark">Artículo</h1>

<h3>{{ $nombre_personaje }}</h3>
<img src="{{ $imagen_personaje }}" alt="">
@endsection