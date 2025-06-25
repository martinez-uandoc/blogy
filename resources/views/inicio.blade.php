@extends("layouts.main")


@section("titulo", "Mi sitio web de Laravel")


@section("contenido")
<ul class="list-group list-group-horizontal mt-4 justify-content-center fs-2">
@foreach($etiquetas AS $e)
<li class="list-group-item"s>
    <a href="{{ url('etiquetas/' .$e->nombre) }}">{{ $e->nombre }}</a>
</li>
@endforeach
</ul>

<br>
<br>
<br>
<br>
<div class="container d-flex flex-wrap justify-content-center">
@foreach ($articulos as $a)
<div class="card m-3" style="width: 18rem;">
  <img src="{{ $a->portada }}" style="aspect-ratio: 1/1; object-fit:cover">
  <div class="card-body">
    <h5 class="card-title">{{ $a->titulo }}</h5>
    <p class="card-text">{{ $a->descripcion }}</p>
    <a href="#" class="btn btn-primary">📖 Ir a la nota</a>
  </div>
</div>
@endforeach
</div>


<x-card imagen="https://i.pinimg.com/736x/75/30/83/7530839b68fb57aae3148c61e1cc5e18.jpg" titulo="Titulo en el componente" descripcion="Descripción del articulo en componente"></x-card>
@endsection