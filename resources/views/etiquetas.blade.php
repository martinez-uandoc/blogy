@extends("layouts.main")

@section("titulo", "Etiqueta")

@section("contenido")
<h1 class="display-1 fw-bold text-white bg-dark">Artículo</h1>

<div class="container d-flex flex-wrap justify-content-center">
@forelse ($articulos as $a)
<div class="card m-3" style="width: 18rem;">
  <img src="{{ $a->portada }}" style="aspect-ratio: 1/1; object-fit:cover">
  <div class="card-body">
    <h5 class="card-title">{{ $a->titulo }}</h5>
    <p class="card-text">{{ $a->descripcion }}</p>
    <a href="#" class="btn btn-primary">📖 Ir a la nota</a>
  </div>
</div>
@empty
<h1 class="text-center">No hay artículos con esta etiqueta</h1>
@endforelse
</div>
@endsection