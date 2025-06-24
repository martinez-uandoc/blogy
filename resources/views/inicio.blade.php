@extends("layouts.main")


@section("titulo", "Mi sitio web de Laravel")


@section("contenido")
<h1 class="display-1 fw-bold text-white bg-dark">Hola desde una pagina con herencia</h1>

{{ $etiquetas }}
@endsection