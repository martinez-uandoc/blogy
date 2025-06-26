<div class="card {{ $clases ?? '' }}" style="width: 18rem;">
  <img src="{{ $imagen }}" class="card-img-top" alt="...">
  <div class="card-body">
    <span class="badge bg-dark text-white float-end">{{ $autor }}</span>
    <h5 class="card-title">{{ $titulo }}</h5>
    <p class="card-text">{{ $descripcion }}</p>
    <a href="{{ route("sitio.sistemaArticulo", ["id" => $id]) }}" class="btn btn-primary">Leer nota</a>
  </div>
</div>

