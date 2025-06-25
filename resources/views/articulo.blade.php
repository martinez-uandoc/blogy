@extends("layouts.main")


@section("titulo", "Artículos")


@section("contenido")
<div class="container text-center">
    <h1 class="display-2">{{ $registro->titulo }}</h1>
<img src="{{ $registro->portada }}" alt="">
<p class="text-muted">{{ $registro->descripcion }}</p>

{!! $registro->contenido !!}
</div>
@endsection