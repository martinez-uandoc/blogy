<div class="card {{ $clases ?? '' }}" style="width: 18rem;">
  <img src="{{ $imagen }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $titulo }}</h5>
    <p class="card-text">{{ $descripcion }}</p>
    <a href="{{ url('articulo/'.$id) }}" class="btn btn-primary">Leer nota</a>
  </div>
</div>

